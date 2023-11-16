<x-app-layout>

    <section x-data="reviewForm()">
        <div class="container">
            <div
                class="mx-auto max-w-2xl px-4 pb-24 pt-16 sm:px-6 sm:pb-32 sm:pt-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:max-w-lg lg:self-end">
                    <nav aria-label="Breadcrumb">
                        <ol role="list" class="flex items-center space-x-2">
                            <li>
                                <div class="flex items-center text-sm">
                                    <span
                                        class="font-medium text-gray-500 hover:text-gray-900">{{ $product->category->name }}</span>
                                </div>
                            </li>
                        </ol>
                    </nav>

                    <div class="mt-4">
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $product->name }}
                        </h1>
                        <h3 class="text-lg font-medium text-gray-700">Created by:
                            @if (auth()->check() && auth()->id() === $product->artisan_id)
                                <strong>You</strong>
                            @else
                                {{ $product->artisan->name }}
                            @endif
                        </h3>
                    </div>

                    <section aria-labelledby="information-heading" class="mt-4">
                        <h2 id="information-heading" class="sr-only">Product information</h2>

                        <div class="flex items-center">
                            <p class="text-lg text-gray-900 sm:text-xl">{{ number_format($product->price, 2) }}€</p>

                            <div class="ml-4 border-l border-gray-300 pl-4">
                                <h2 class="sr-only">Reviews</h2>
                                <div class="flex items-center">
                                    <div>
                                        <div class="flex items-center">
                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg class="text-gray-300 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="sr-only">4 out of 5 stars</p>
                                    </div>
                                    <p class="ml-2 text-sm text-gray-500">1624 reviews</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 space-y-6">
                            <p class="text-base text-gray-500">{{ $product->description }}</p>
                        </div>

                        <div class="mt-6 flex items-center">
                            @if ($product->quantity > 0)
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="green"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="ml-2 text-sm text-gray-500">In stock ({{ $product->quantity }}) and ready to
                                    ship
                                </p>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="red" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>

                                <p class="text-red-500">Out of Stock. Resuppling soon!</p>
                            @endif
                        </div>
                    </section>
                </div>

                <!-- Product image -->
                <div class="mt-10 lg:col-start-2 lg:row-span-2 lg:mt-0 lg:self-center">
                    <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg">
                        @foreach ($product->images as $image)
                            <img src="{{ Storage::url($image->image_path) }}" alt="{{ $image->alt_text }}"
                                class="h-full w-full object-cover object-center" loading="lazy">
                        @endforeach
                    </div>
                </div>
                <!-- Product form -->
                @if ($product->quantity > 0)
                    <div class="mt-10 lg:col-start-1 lg:row-start-2 lg:max-w-lg lg:self-start">
                        <section aria-labelledby="options-heading">
                            <h2 id="options-heading" class="sr-only">Product options</h2>

                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                <div class="mt-4">
                                    <label for="quantity-0"
                                        class="block text-sm font-medium text-gray-700">Quantity</label>
                                    <input type="number" name="quantity" value="1" min="1"
                                        max="{{ $product->quantity }}" class="rounded border-gray-300">
                                </div>

                                <div class="mt-10">
                                    <button type="submit"
                                        class="flex w-full items-center justify-center rounded-md border border-transparent bg-primary px-8 py-3 text-base font-medium text-white hover:bg-accent focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Add
                                        to Cart</button>
                                </div>
                                <div class="mt-6 text-center">
                                    <a href="#" class="group inline-flex text-base font-medium">
                                        <svg class="mr-2 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                        </svg>
                                        <span class="text-gray-500 hover:text-gray-700">Lifetime Guarantee</span>
                                    </a>
                                </div>
                            </form>
                        </section>
                    </div>
                @endif
            </div>
        </div>

        <section aria-labelledby="reviews-heading" class="bg-background">
            <div
                class="mx-auto max-w-2xl px-4 py-24 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-12 lg:gap-x-8 lg:px-8 lg:py-32">
                <div class="lg:col-span-4">
                    <h2 id="reviews-heading" class="text-2xl font-bold tracking-tight text-gray-900">Customer Reviews
                    </h2>

                    <div class="mt-3 flex items-center">
                        <div>
                            <div class="flex items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-300" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                        </div>
                        <p class="ml-2 text-sm text-gray-900">Based on 1624 reviews</p>
                    </div>

                    <div class="mt-6">
                        <h3 class="sr-only">Review data</h3>

                        <dl class="space-y-3">
                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900">5<span class="sr-only"> star
                                            reviews</span>
                                    </p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>
                                            <div style="width: calc(1019 / 1624 * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">63%</dd>
                            </div>
                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900">4<span class="sr-only"> star
                                            reviews</span>
                                    </p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>
                                            <div style="width: calc(162 / 1624 * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">10%</dd>
                            </div>
                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900">3<span class="sr-only"> star
                                            reviews</span>
                                    </p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>
                                            <div style="width: calc(97 / 1624 * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">6%</dd>
                            </div>
                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900">2<span class="sr-only"> star
                                            reviews</span>
                                    </p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>
                                            <div style="width: calc(199 / 1624 * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">12%</dd>
                            </div>
                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900">1<span class="sr-only"> star
                                            reviews</span>
                                    </p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>
                                            <div style="width: calc(147 / 1624 * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">9%</dd>
                            </div>
                        </dl>
                    </div>
                    @if (auth()->check() && !$product->hasUserReviewed(auth()->id()) && auth()->id() !== $product->artisan_id)
                        <template x-if="!userHasReviewed">
                            <div class="mt-10 add-review" @submit.prevent="submitReview">
                                <h3 class="text-lg font-medium text-gray-900">Share your thoughts</h3>
                                <p class="mt-1 text-sm text-gray-600">If you’ve used this product, share your thoughts
                                    with
                                    other
                                    customers</p>

                                <button @click="openModal = true"
                                    class="mt-6 inline-flex w-full items-center justify-center rounded-md border border-gray-300 bg-white px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 sm:w-auto lg:w-full">Write
                                    a review</button>
                            </div>
                        </template>
                        <div x-cloak x-show="openModal" class="fixed inset-0 z-10 overflow-y-auto"
                            aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div
                                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                    aria-hidden="true"></div>
                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                    aria-hidden="true">&#8203;</span>
                                <div
                                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Write
                                            a
                                            Review</h3>
                                        <div>
                                            <label for="rating"
                                                class="block text-sm font-medium text-gray-700">Rating</label>
                                            <select id="rating" x-model="rating"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-sm">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="mt-2">
                                            <textarea x-model="review" rows="4"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none"></textarea>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse">
                                        <button @click="submitReview" type="button"
                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
                                        <button @click="openModal = false" type="button"
                                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="mt-16 lg:col-span-7 lg:col-start-6 lg:mt-0 reviews">
                    <h3 class="sr-only">Recent reviews</h3>

                    <div class="flow-root">
                        <div class="-my-12 divide-y divide-gray-400">
                            <template x-for="review in reviews" :key="review.id">
                                <div class="py-12">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <h4 class="text-sm font-bold text-gray-900" x-text="review.user.name">
                                            </h4>
                                            <div class="mt-2 flex items-center">
                                                <template x-for="i in review.rating">
                                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </template>
                                                <template x-for="i in 5 - review.rating">
                                                    <svg class="text-gray-300 h-5 w-5 flex-shrink-0"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </template>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 space-y-6 text-base italic text-gray-600">
                                        <p x-text="review.review"></p>
                                    </div>
                                    <template x-if="review.updated_at == review.created_at">
                                        <p class="mt-2 text-sm text-gray-500">
                                            Reviewed on <span x-text="formatDate(review.created_at)"></span>
                                        </p>
                                    </template>
                                    <template x-if="review.updated_at != review.created_at">
                                        <p class="mt-1 text-sm text-gray-500">Updated on <span
                                                x-text="formatDate(review.updated_at)"></span></p>
                                    </template>

                                    <template x-if="review.user.id === {{ auth()->id() }}">
                                        <button @click="beginEditReview(review)"
                                            class="flex items-center justify-center rounded-md border border-transparent bg-primary px-8 py-3 text-base font-medium text-white hover:bg-accent focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                                            Edit Review
                                        </button>
                                    </template>
                                </div>
                            </template>
                            <p x-show="reviews.length === 0" class="text-gray-600">No reviews yet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div x-cloak x-show="editingReview" class="fixed inset-0 z-10 overflow-y-auto"
                aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <!-- Modal backdrop -->
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    <div
                        class="inline-block align-bottom bg-background rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <h3 class="text-xl leading-6 font-medium text-gray-900" id="modal-title">Edit
                                Your Review
                            </h3>
                            <div class="mt-2">
                                <div>
                                    <label for="editRating"
                                        class="block text-sm font-medium text-gray-700">Rating</label>
                                    <select id="editRating" x-model="editRating"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-sm">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <option :value="{{ $i }}"
                                                x-bind:selected="editRating == {{ $i }}">
                                                {{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="mt-4">
                                    <label for="editReviewText"
                                        class="block text-sm font-medium text-gray-700">Review</label>
                                    <textarea id="editReviewText" x-model="editReviewText" rows="4"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-sm"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 sm:flex sm:flex-row-reverse">
                            <button @click="updateReview" type="button"
                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary text-base font-medium text-white hover:bg-accent focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">Update</button>
                            <button @click="editingReview = false" type="button"
                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-secondary text-base font-medium text-black focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div x-cloak x-show="openModal" class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title"
                role="dialog" aria-modal="true">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    <div
                        class="inline-block align-bottom bg-secondary rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <h3 class="text-xl leading-6 font-medium text-gray-900" id="modal-title">Write a Review
                            </h3>
                            <div>
                                <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
                                <select id="rating" x-model="rating"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-sm">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <textarea x-model="review" rows="4"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none"></textarea>
                            </div>
                        </div>
                        <div class="px-4 py-3 sm:flex sm:flex-row-reverse">
                            <button @click="submitReview" type="button"
                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary text-base font-medium text-white hover:bg-accent focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
                            <button @click="openModal = false" type="button"
                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-secondary text-base font-medium text-black focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <script>
        function reviewForm() {
            return {
                openModal: false,
                productId: '{{ $product->id }}',
                rating: '1',
                review: '',
                reviews: @json($product->reviews->load('user')),
                userHasReviewed: {{ $product->hasUserReviewed(auth()->id()) ? 'true' : 'false' }},
                editingReview: false,
                editRating: 1,
                editReviewText: '',
                editReviewId: null,

                beginEditReview(review) {
                    this.editingReview = true;
                    this.editRating = review.rating;
                    this.editReviewText = review.review;
                    this.editReviewId = review.id;
                },

                formatDate(dateString) {
                    const options = {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    };
                    return new Date(dateString).toLocaleDateString(undefined, options);
                },

                submitReview() {
                    const payload = {
                        product_id: this.productId,
                        rating: parseInt(this.rating, 10),
                        review: this.review,
                        _token: '{{ csrf_token() }}'
                    };

                    fetch('{{ route('reviews.store') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                            },
                            body: JSON.stringify(payload)
                        })
                        .then(response => response.json())
                        .then(data => {
                            this.reviews.push(data);
                            this.userHasReviewed = true;
                            this.rating = '';
                            this.review = '';
                            this.openModal = false;
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                },

                updateReview() {
                    const payload = {
                        rating: parseInt(this.editRating, 10),
                        review: this.editReviewText,
                        _token: '{{ csrf_token() }}'
                    };

                    fetch('/reviews/' + this.editReviewId, {
                            method: 'PATCH',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': payload._token,
                            },
                            body: JSON.stringify(payload)
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            const index = this.reviews.findIndex(review => review.id === this.editReviewId);

                            if (index !== -1) {
                                this.reviews[index] = {
                                    ...this.reviews[index],
                                    ...data,
                                    user: this.reviews[index].user
                                };

                                this.editingReview = false;
                                this.editReviewId = null;
                                this.editRating = '1';
                                this.editReviewText = '';
                            }
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                },
            };
        }
    </script>
</x-app-layout>
