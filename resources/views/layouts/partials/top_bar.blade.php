<section class="h_top_part">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
                <ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
                    @if(auth()->check())
                    <li><a href="#" class="default_t_color">Hi, {{auth()->user()->name}}</a></li>
                    <li><a href="#" class="default_t_color">My Account</a></li>
                        <li>
                            <a class="default_t_color" href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @else
                        <li><a href="#" class="default_t_color" data-popup="#login_popup">Log in</a></li>
                    @endif

                    <li><a href="{{route('orders.create')}}" class="default_t_color">Checkout</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
                <p class="f_size_small">Call us toll free: <b class="color_dark">(123) 456-7890</b></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c">
                <ul class="horizontal_list clearfix d_inline_b t_align_l f_size_small site_settings type_2">
                    <li class="container3d relative">
                        <a role="button" href="#" class="color_dark" id="lang_button"><img class="d_inline_middle m_right_10" src="images/flag_en.jpg" alt="">English</a>
                        <ul class="dropdown_list type_2 top_arrow color_light">
                            <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="images/flag_en.jpg" alt="">English</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="images/flag_fr.jpg" alt="">French</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="images/flag_g.jpg" alt="">German</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="images/flag_i.jpg" alt="">Italian</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="images/flag_s.jpg" alt="">Spanish</a></li>
                        </ul>
                    </li>
                    <li class="m_left_20 relative container3d">
                        <a role="button" href="#" class="color_dark" id="currency_button"><span class="scheme_color">$</span> US Dollar</a>
                        <ul class="dropdown_list type_2 top_arrow color_light">
                            <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">$</span> US Dollar</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">&#8364;</span> Euro</a></li>
                            <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">&#163;</span> Pound</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>