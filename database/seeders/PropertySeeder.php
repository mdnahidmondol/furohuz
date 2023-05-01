<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Property - 01',
                'slug' => 'property-01',
                'location_id' => 1,
                'price' => '20000',
                'type_id' => 1,
                'bed' => '2',
                'bath' => '3',
                'grage' => '1',
                'city' => 'Dhaka',
                'zip_code' => '1207',
                'country' => 'Bangladesh',
                'user_id' => '1',
                'sqf' => '1280',
                'phone' => '01737988947',
                'date' => '2022-11-08 ',
                'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.",
                'address' => "12/7, Solimullah Road, Dhaka-1207",
                'details' => "Details",
                'map_link' => "https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed",
                'whatsapp_number'=>'01737988947',
                'created_by'=>1,
                'rating'=>'5',
                'share_link'=>'#',
                'share_count'=>'0',
                'call_count'=>'0',
                'visitor_count'=>'0',
                'status'=>1,
                'publisher_status'=>1,
                'image'=>'/images/1.jpg',
                'recived_count'=>'0',
               
               // 'feature'=>'image/1.jpg',
                //'image_gallery'=>'image/1.jpg',
                'video_link'=>'https://www.youtube.com/embed/-NInBEdSvp8?feature=oembed',
                'meta_title'=>'title',
                'meta_description'=>'details',
                'meta_tag'=>'home, about, contact',
                'meta_keyward'=>'this is the final keyworad',
                'created_at' => '2022-11-08 21:38:52',
                'updated_at' => '2022-11-08 21:38:52',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Property - 02',
                'slug' => 'property-02',
                'location_id' => 1,
                'price' => '20000',
                'type_id' => 1,
                'bed' => '2',
                'bath' => '3',
                'grage' => '1',
                'city' => 'Dhaka',
                'zip_code' => '1207',
                'country' => 'Bangladesh',
                'user_id' => '1',
                'sqf' => '1280',
                'phone' => '01737988947',
                'date' => '2022-11-08 ',
                'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.",
                'address' => "12/7, Solimullah Road, Dhaka-1207",
                'details' => "Details",
                'map_link' => "https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed",
                'whatsapp_number'=>'01737988947',
                'created_by'=>1,
                'rating'=>'5',
                'share_link'=>'#',
                'share_count'=>'0',
                'call_count'=>'0',
                'visitor_count'=>'0',
                'status'=>1,
                'publisher_status'=>1,
                'image'=>'/images/1.jpg',
                'recived_count'=>'0',
               
               // 'feature'=>'image/1.jpg',
                //'image_gallery'=>'image/1.jpg',
                'video_link'=>'https://www.youtube.com/embed/-NInBEdSvp8?feature=oembed',
                'meta_title'=>'title',
                'meta_description'=>'details',
                'meta_tag'=>'home, about, contact',
                'meta_keyward'=>'this is the final keyworad',
                'created_at' => '2022-11-08 21:38:52',
                'updated_at' => '2022-11-08 21:38:52',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Property - 03',
                'slug' => 'property-03',
                'location_id' => 1,
                'price' => '20000',
                'type_id' => 1,
                'bed' => '2',
                'bath' => '3',
                'grage' => '1',
                'city' => 'Dhaka',
                'zip_code' => '1207',
                'country' => 'Bangladesh',
                'user_id' => '1',
                'sqf' => '1280',
                'phone' => '01737988947',
                'date' => '2022-11-08 ',
                'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.",
                'address' => "12/7, Solimullah Road, Dhaka-1207",
                'details' => "Details",
                'map_link' => "https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed",
                'whatsapp_number'=>'01737988947',
                'created_by'=>1,
                'rating'=>'5',
                'share_link'=>'#',
                'share_count'=>'0',
                'call_count'=>'0',
                'visitor_count'=>'0',
                'status'=>1,
                'publisher_status'=>1,
                'image'=>'/images/1.jpg',
                'recived_count'=>'0',
                
               // 'feature'=>'image/1.jpg',
                //'image_gallery'=>'image/1.jpg',
                'video_link'=>'https://www.youtube.com/embed/-NInBEdSvp8?feature=oembed',
                'meta_title'=>'title',
                'meta_description'=>'details',
                'meta_tag'=>'home, about, contact',
                'meta_keyward'=>'this is the final keyworad',
                'created_at' => '2022-11-08 21:38:52',
                'updated_at' => '2022-11-08 21:38:52',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Property - 04',
                'slug' => 'property-04',
                'location_id' => 1,
                'price' => '20000',
                'type_id' => 1,
                'bed' => '2',
                'bath' => '3',
                'grage' => '1',
                'city' => 'Dhaka',
                'zip_code' => '1207',
                'country' => 'Bangladesh',
                'user_id' => '1',
                'sqf' => '1280',
                'phone' => '01737988947',
                'date' => '2022-11-08 ',
                'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.",
                'address' => "12/7, Solimullah Road, Dhaka-1207",
                'details' => "Details",
                'map_link' => "https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed",
                'whatsapp_number'=>'01737988947',
                'created_by'=>1,
                'rating'=>'5',
                'share_link'=>'#',
                'share_count'=>'0',
                'call_count'=>'0',
                'visitor_count'=>'0',
                'status'=>1,
               
                'publisher_status'=>1,
                'image'=>'/images/1.jpg',
                'recived_count'=>'0',
               // 'feature'=>'image/1.jpg',
                //'image_gallery'=>'image/1.jpg',
                'video_link'=>'https://www.youtube.com/embed/-NInBEdSvp8?feature=oembed',
                'meta_title'=>'title',
                'meta_description'=>'details',
                'meta_tag'=>'home, about, contact',
                'meta_keyward'=>'this is the final keyworad',
                'created_at' => '2022-11-08 21:38:52',
                'updated_at' => '2022-11-08 21:38:52',
            ),4 => 
            array (
                'id' => 5,
                'title' => 'Property - 05',
                'slug' => 'property-05',
                'location_id' => 1,
                'price' => '20000',
                'type_id' => 1,
                'bed' => '2',
                'bath' => '3',
                'grage' => '1',
                'city' => 'Dhaka',
                'zip_code' => '1207',
                'country' => 'Bangladesh',
                'user_id' => '1',
                'sqf' => '1280',
                'phone' => '01737988947',
                'date' => '2022-11-08 ',
           
                'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.",
                'address' => "12/7, Solimullah Road, Dhaka-1207",
                'details' => "Details",
                'map_link' => "https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed",
                'whatsapp_number'=>'01737988947',
                'created_by'=>1,
                'rating'=>'5',
                'share_link'=>'#',
                'share_count'=>'0',
                'call_count'=>'0',
                'visitor_count'=>'0',
                'status'=>1,
                'publisher_status'=>1,
                'image'=>'/images/1.jpg',
                'recived_count'=>'0',
               // 'feature'=>'image/1.jpg',
                //'image_gallery'=>'image/1.jpg',
                'video_link'=>'https://www.youtube.com/embed/-NInBEdSvp8?feature=oembed',
                'meta_title'=>'title',
                'meta_description'=>'details',
                'meta_tag'=>'home, about, contact',
                'meta_keyward'=>'this is the final keyworad',
                'created_at' => '2022-11-08 21:38:52',
                'updated_at' => '2022-11-08 21:38:52',
            ),
            
        ));
    }
}
