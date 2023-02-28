import { useForm, usePage } from '@inertiajs/inertia-react';
import { toFormData } from "./../../utils";
import React from 'react';

const Login = () => {
  
  const { data, setData, post, processing, errors } = useForm({
		email: "",
		password: "",
	});


  function handleSubmit(e) {
    e.preventDefault();
		const formData = toFormData(data);
    
		post(route('login.submit'), {
			data: formData,
			onFinish: () => {
				//
			},
			onSuccess: () => {
       
				// if (document.querySelector("#createDialog")) {
				// 	document.querySelector("#createDialog").click();
				// }
			},
		});
  }
    return (
        <>
           <div className="bg-no-repeat bg-cover bg-center relative" style={{backgroundImage: "url(image/login.jpg)"}}><div className="absolute bg-gradient-to-b from-green-500 to-green-400 opacity-75 inset-0 z-0"></div>
  <div className="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
      <div className="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
        <div className="self-start hidden lg:flex flex-col  text-white">
          <img src="" className="mb-3"/>
          <h1 className="mb-3 font-bold text-5xl">Hi ? Welcome Back Aji </h1>
          <p className="pr-3">Lorem ipsum is placeholder text commonly used in the graphic, print,
            and publishing industries for previewing layouts and visual mockups</p>
        </div>
      </div>
      <div className="flex justify-center self-center  z-10">
        <div className="p-12 bg-white mx-auto rounded-2xl w-100 ">
            <div className="mb-4">
              <h3 className="font-semibold text-2xl text-gray-800">Sign In </h3>
              <p className="text-gray-500">Please sign in to your account.</p>
            </div>
            <div className="space-y-5">
              <form onSubmit={handleSubmit}>
                        <div className="space-y-2">
                              <label className="text-sm font-medium text-gray-700 tracking-wide">Email</label>
              <input className=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="text" placeholder="Enter your Email" name="email" errors={errors.email}
												// value={data.email}
												onChange={(e) => setData("email", e.target.value)} />
              </div>
              {errors && errors.email ? <div className="text-[red] py-2">{errors.email}</div> : null}
                          <div className="space-y-2">
              <label className="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                Password
              </label>
              <input className="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="password" placeholder="Enter your password" name="password" errors={errors.password}
												// value={data.password}
												onChange={(e) => setData("password", e.target.value)} required=""/>
            </div>
            {errors && errors.password ? <div className="text-[red] py-2">{errors.password}</div> : null}
            
              <div className="flex items-center justify-between py-3">
              <div className="flex items-center">
                <input id="remember_me" name="remember_me" type="checkbox" required="" className="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded"/>
                <label for="remember_me" className="ml-2 block text-sm text-gray-800">
                  Remember me
                </label>
              </div>
              <div className="text-sm">
                <a href="#" className="text-green-400 hover:text-green-500">
                  Forgot your password?
                </a>
              </div>
            </div>
            <div>
              <button type="submit" className="w-full flex justify-center bg-green-400  hover:bg-green-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                Sign in
              </button>
            </div>
            </form>
            </div>
            <div className="pt-5 text-center text-gray-400 text-xs">
              <span>
                Copyright © 2022-2023
                <a href="https://codepen.io/uidesignhub" rel="" target="_blank" title="Ajimon" className="text-green hover:text-green-500 "> MRR</a></span>
            </div>
        </div>
      </div>
  </div> 
  </div>
        </>
    );
}

export default Login;
