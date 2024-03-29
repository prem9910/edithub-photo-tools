<?php session_start();
include "./header.php";
?>

<!DOCTYPE html>
<html lang="en">
<body>
<div class="container mx-auto antialiased text-gray-900 bg-white" x-data="setup()">
    <main class="mx-4 my-16">
        <div class="text-center">
        <h1 class="mb-4 text-2xl font-normal md:text-3xl lg:text-4xl">
            Our <span class="font-semibold">plans</span> for <span class="font-semibold">EditHub </span>Tools
        </h1>
        <p class="text-sm font-normal text-gray-400">
            See below our main three plans for your business, for your startup and agency.
        </p>
        <p class="text-sm font-normal text-gray-400">
            It start from here! You can teach yourself what you really like.
        </p>
        </div>

        <!-- Plan switch -->
        <div class="flex items-center justify-center mt-10 space-x-4">
        <span class="text-base font-medium">Bill Monthly</span>
        <button
                class="relative rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                x-cloak
                @click="billPlan == 'monthly' ? billPlan = 'annually' : billPlan = 'monthly'"
                >
            <div class="w-16 h-8 transition bg-indigo-500 rounded-full shadow-md outline-none"></div>
            <div
                class="absolute inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform bg-white rounded-full shadow-sm top-1 left-1"
                :class="{ 'translate-x-0': billPlan == 'monthly', 'translate-x-8': billPlan == 'annually' }"
                ></div>
        </button>
        <span class="text-base font-medium">Bill Annually</span>
        </div>

        <!-- Plans -->
        <div
            class="flex flex-col items-center justify-center mt-16 space-y-8 lg:flex-row lg:items-stretch lg:space-x-8 lg:space-y-0"
            >
        <template x-for="(plan, i) in plans" x-key="i">
            <section class="flex flex-col w-full max-w-sm p-12 space-y-6 bg-white rounded-lg shadow-md">
            <!-- Price -->
            <div class="flex-shrink-0">
                <span
                    class="text-4xl font-medium tracking-tight"
                    :class="plan.name == 'Basic' ? 'text-green-500' : ''"
                    x-text="`$${billPlan == 'monthly' ? plan.price.monthly : plan.price.annually}`"
                    ></span>
                <span class="text-gray-400" x-text="billPlan == 'monthly' ? '/month' : '/year'"></span>
            </div>

            <!--  -->
            <div class="flex-shrink-0 pb-6 space-y-2 border-b">
                <h2 class="text-2xl font-normal" x-text="plan.name"></h2>
                <p class="text-sm text-gray-400" x-text="plan.discretion"></p>
            </div>

            <!-- Features -->
            <ul class="flex-1 space-y-4">
                <template x-for="(feature, i) in plan.features" x-key="i">
                <li class="flex items-start">
                    <svg
                        class="w-6 h-6 text-green-300"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        >
                    <path
                            fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"
                            />
                    </svg>
                    <span class="ml-3 text-base font-medium" x-text="feature"></span>
                </li>
                </template>
            </ul>

            <!-- Button -->
            <div class="flex-shrink-0 pt-4">
                <button
                        class="inline-flex items-center justify-center w-full max-w-xs px-4 py-2 transition-colors border rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        :class="plan.name == 'Basic' ? 'bg-indigo-500 text-white hover:bg-indigo-700' : 'hover:bg-indigo-500 hover:text-white'"
                        x-text="`Get ${plan.name}`"
                        ></button>
            </div>
            </section>
        </template>
        </div>
    </main>
</div>

<?php include './footer.php'; ?>
</body>
</html>