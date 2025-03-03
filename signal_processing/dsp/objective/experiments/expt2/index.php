<? require "../../../../../LocalSettings.php"; ?>
<? $page_title="Experiment"; $show_sidebar=1; ?>

<? include $header; ?>			  
<h1>Aim</h1>
<ol>
               <li>To design FIR filter using window techniques.</li>
               <li>To analyse and compare the performance of different windowing techniques.</li>
               </ol>
<h1>Theory</h1>
   <p>A finite impulse response filter (FIR) is a class of linear time-invariant filters. The impulse response of the FIR filter
settles to zero after a finite number of sample intervals. The FIR filter is a causal filter that requires a present input and
a finite number of past input samples to compute the present output. The number of past samples required (M) is also
known as the order of filter, and it signifies the amount of memory needed.
Thus, for FIR impulse response <i>h</i>(n), we can write,</p>
           <img src="img/fir_img1.jpg"/>
<p>
The first condition is implied by the causality of the filter while the later condition indicates that the response of the filter
needs only <i>M</i> past samples. An FIR filter of order <i>M</i> has (<i>M</i> + 1) terms in the RHS of its expression. The formula for
FIR system using convolution can be written as
</p>
                      <img src="img/fir_img2.jpg"/>
<p>
where <i>x</i>(<i>n</i>) represents input to the system at time <i>n</i>, while <i>y</i>(<i>n</i>) is the output at the same time instant <i>n</i>. Using different
equation, we can represent an <i>M</i>-order FIR filter as
</p>
                            <img src="img/fir_img3.jpg"/>
<p>
    The impulse response of the filter can be calculated by using train of impulses as an input sequence, i.e.
</p>
      <img src="img/img2.jpg"/>
<p>
The values of <i>h</i>[<i>n</i>], n = 0 to <i>M</i>, are known as coefficients of the filter.These coefficients act as the weights of the corresponding
delayed input sample. The transfer function of the FIR filter is obtained by taking Z-transform of the above expression,
which yields,
</p>
                                           <img src="img/fir_img4.jpg"/>
<p>
It can be seen that all the poles in of FIR filter are located at the origin, thus the filters are inherently stable.
The design of FIR filter is to determine the set of (<i>M</i> + 1) coefficients <i>h</i>(<i>n</i>), <i>n</i> = 0 to <i>M</i>. Sometimes <i>h</i>(0) is set to
unity and other coefficients are accordingly scaled, which reduces the the problem to the calculation of M values. Various
techniques are used to design an FIR filter from the given specifications. The current experiment involves design of the
FIR filter using window methods. The window techniques for FIR filter begin with specifications of the desired frequency
response of the filter, usually denoted by <i>H</i><sub>d</sub>(w). Using an inverse Fourier transform one can obtain a desired impulse
response of the filter, <i>h</i><sub>d</sub>(<i>n</i>) as
</p>
                                                <img src="img/fir_img5.jpg"/>
<p>
However, usually an implementation of this response translates into an infinite impulse response (IIR) filter. In order to
obtain an FIR filter with <i>M</i> coefficients, this response is truncated by multiplying <i>h</i><sub>d</sub>(<i>n</i>) by a window function w(n) to
obtain
</p>
                                      <img src="img/fir_img6.jpg"/>
<p>
where, h(n) is the impulse response of the desired FIR filter. The choice of the window function greatly affects the
performance of the filter. In this experiment, we design low pass FIR filter using some of the following windows.
</p>
				</div>
			</div>
			</div>
			</div>
			
		<div class="post">
			<div class="post-bgtop">
			<div class="post-bgbtm">
			  <h1 class="title">Windows</h1>
				<div class="entry">
				<ol>
                <li>Rectangular Window </li>
                <p>It is the simplest form of the windowing function. The rectangular window wrect(n) is defined as:</p>
                                                <img src="img/fir_img7.jpg"/>
                <p>This window assigns unit weights to the past M samples under consideration, and simply discards the rest of them.
The magnitude and phase response of the window function can be obtained by taking Fourier transform of the
wrect(n). The magnitude response of the function shows that comparatively small amount of energy is concentrated
in the main lobe, while the peak of the first side lobe is -13 dB lower than the main lobe. Students are expected to
obtain the expression for the magnitude and phase response of the rectangular window.</p>
                <li>Hanning Window</li>
                <p>Hanning window is a bell shaped window, based on the Hann function. The window function
is given by</p>
    <img src="img/fir_img8.jpg"/>
                <p>The FIR filter using Hanning window exhibits a side lobe role off at approximately 18 dB per octave as compared
to 6 dB per octave in case of rectangular window. This window is also referred as "raised cosine" window.</p>
                   <li> Kaiser Window
                   </li>
<p>
It is a parametric window function that facilitates the designer to select the value of the ripple
parameter B. The B parameter enables to tradeoff between the ripple and the transition bandwidth. The coefficients
of the Kaiser window, which uses the modified zeroth order Bessel function I<sub>0</sub>(x), are usually calculated using some
software package. The Kaiser window w<sub>kais</sub>, is then given as</p>
                                        <img src="img/fir_img9.jpg"/>
<p>By selecting an appropriate value of B, a desired filter response can be obtained. Generally, values of beta are chosen
to be greater than 3.</p>
                </ol>
<a href="../FIR_Basics.pdf">More on FIR Basics</a>
				</div>
			</div>
			</div>
			</div>

<? include $footer; ?>
