import React from 'react';

const OurLocations = ({locations}) => {
    return (
        <>
         <section className=" mt-0 pb-16 mb-16">
        <div className="text-center items-center w-[80%] mx-auto my-10">
                <h2 className="text-4xl mb-3 font-bold space-y-4 text-[#064d83]">Our Locations</h2>
            </div>
			<div className="grid mx-auto grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4  justify-center items-center  w-[80%] gap-4 md:gap-6">
				{locations && locations.map((item, key) => 
				<a href={route("frontend.area", {
					location: item.slug,
				})}>
				<div className="relative flex flex-col justify-between   bg-white shadow-md rounded-3xl  bg-cover text-gray-800  overflow-hidden cursor-pointer w-full object-cover object-center rounded-lg shadow-md h-64 " key={key}
					style={{backgroundImage:`url('${item.image}')`}}>
					<div className="absolute bg-gradient-to-t from-green-400 to-blue-400  opacity-50 inset-0 z-0"></div>
					<div className="relative flex flex-row items-end  h-72 w-full ">
						{/* <div className="absolute right-0 top-0 m-2 bg-white p-2 rounded-lg">
                        Book for Sep 2023
						</div> */}
						<div className="p-3 md:p-6 rounded-lg  flex flex-col w-full z-10 ">
							{/* <h4 className="mt-1 text-white text-xl font-semibold  leading-tight truncate">Loremipsum..
							</h4> */}
							<div className="flex justify-between items-center ">
								<div className="flex flex-col">
									<h2 className=" flex items-center text-white font-bold text-md md:text-xl">
										<svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4 mr-1" fill="none"
											viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
											</path>
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
										</svg>
										{item.location_name}
									</h2>
								</div>
							</div>
							<div className="flex pt-4  text-sm text-gray-300">
								{/* <div className="flex items-center mr-auto">
									<svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 text-yellow-500 mr-1"
										viewBox="0 0 20 20" fill="currentColor">
										<path
											d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
										</path>
									</svg>
									<p className="font-normal">4.5</p>
								</div> */}
								{/* <div className="flex items-center font-medium text-white ">
									$1800
									<span className="text-gray-300 text-sm font-normal"> /wk</span>
								</div> */}
							</div>
						</div>
					</div>
				</div>
				</a>
				)}
				{/* <div className="relative flex flex-col justify-between   bg-white shadow-md  rounded-3xl  bg-cover text-gray-800  overflow-hidden cursor-pointer w-full object-cover object-center rounded-lg shadow-md h-64 mb-2"
					style={{backgroundImage:`url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80')`}}>
					<div className="absolute bg-gradient-to-t from-blue-500 to-yellow-400  opacity-50 inset-0 z-0"></div>
					<div className="relative flex flex-row items-end  h-72 w-full ">
                    <div className="absolute right-0 top-0 m-2 bg-white p-2 rounded-lg">
                        Book for Sep 2023
						</div>
						<div className="p-5 rounded-lg  flex flex-col w-full z-10 ">
							<h4 className="mt-1 text-white text-xl font-semibold  leading-tight truncate">Loremipsum..
							</h4>
							<div className="flex justify-between items-center ">
								<div className="flex flex-col">
									<h2 className="text-sm flex items-center text-gray-300 font-normal">
										<svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4 mr-1" fill="none"
											viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
											</path>
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
										</svg>
										India
									</h2>
								</div>
							</div>
							<div className="flex pt-4  text-sm text-gray-300">
								<div className="flex items-center mr-auto">
									<svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 text-yellow-500 mr-1"
										viewBox="0 0 20 20" fill="currentColor">
										<path
											d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
										</path>
									</svg>
									<p className="font-normal">4.5</p>
								</div>
								<div className="flex items-center font-medium text-white ">
									$1800
									<span className="text-gray-300 text-sm font-normal"> /wk</span>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div className="relative flex flex-col justify-between   bg-white shadow-md rounded-3xl  bg-cover text-gray-800  overflow-hidden cursor-pointer w-full object-cover object-center rounded-lg shadow-md h-64 "
					style={{backgroundImage:`url('https://images.unsplash.com/reserve/8T8J12VQxyqCiQFGa2ct_bahamas-atlantis.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80')`}}>
					<div className="absolute bg-gradient-to-t from-green-400 to-blue-400  opacity-50 inset-0 z-0"></div>
					<div className="relative flex flex-row items-end  h-72 w-full ">
                    <div className="absolute right-0 top-0 m-2 bg-white p-2 rounded-lg">
                        Book for Sep 2023
						</div>
						<div className="p-6 rounded-lg  flex flex-col w-full z-10 ">
							<h4 className="mt-1 text-white text-xl font-semibold  leading-tight truncate">Loremipsum..
							</h4>
							<div className="flex justify-between items-center ">
								<div className="flex flex-col">
									<h2 className="text-sm flex items-center text-gray-300 font-normal">
										<svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4 mr-1" fill="none"
											viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
											</path>
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
										</svg>
										Dubai
									</h2>
								</div>
							</div>
							<div className="flex pt-4  text-sm text-gray-300">
								<div className="flex items-center mr-auto">
									<svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 text-yellow-500 mr-1"
										viewBox="0 0 20 20" fill="currentColor">
										<path
											d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
										</path>
									</svg>
									<p className="font-normal">4.5</p>
								</div>
								<div className="flex items-center font-medium text-white ">
									$1800
									<span className="text-gray-300 text-sm font-normal"> /wk</span>
								</div>
							</div>
						</div>
					</div>
				</div> */}
			</div>
            </section>
        </>
    );
}

export default OurLocations;
