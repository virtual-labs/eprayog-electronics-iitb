<? require "../../../../LocalSettings.php"; ?>
<? $page_title="Waveform Generation- WEL Virtual Labs"; $show_sidebar=1; ?>
<? include $header; ?>

<h1>Additive Synthesis of Musical Tone</h1>
<h2>Objective</h2>
<p>
  To use additive synthesis to generate musical tones for a duration of 1 second using sinusoids having a fundamental frequency of 100Hz and a sampling rate of 8KHz
</p>

<h2>Background</h2>
<p>
  Additive synthesis is a process of regenerating a musical tone by the summation of sinusoids and/or other components. It makes use of the Fourier series which tells us that any signal in nature can be expressed as a sum of sinusoids, each with varying amplitude and phase.
</p>

<p>
  An expression for additive synthesis using only sinusoids of different amplitudes and phase is given by
</p>
<img src="img1.jpg"/>
<p>               
  where,
  <ul>
    <li>i = number of signals</li>
    <li>A<sub>i</sub>(t) = Amplitude of the sinusoids</li>
    <li>w<sub>0</sub> = angular frequency</li>
    <li><img src="img2.jpg" align="left"/> = phase of each signal</li>
  </ul>
</p>

<p>
  Consider two harmonics of a sine wave with fundamental frequency of 100Hz. A musical tone is produced by summation of the two harmonics with the fundamental. The tone duration is 1 second. Signal is sampled at a rate of 8Khz.
</p>
<p>
  The synthesized tone
</p>
<p>
  Synth_tone = sinusoid of 100Hz + sinusoid of 200Hz + sinusoid of 300Hz
</p>
<p>
  with each wave sampled at a frequency of 8KHz.
</p>
<p>
  The magnitude response contains the two harmonics of the fundamental frequency (100Hz) i.e. sinusoids of frequencies 200Hz and 300Hz.
</p>

<h2>Post Session Work</h2>
<p>
  Generate a musical tone "sa re ga ma pa da ni sa" using the given fundamental frequency of each tone.
</p>
<table border="1">
  <tbody>
    <tr>
      <th> TONE </th>
      <th> Fundamental frequency(Hz) </th>
    </tr>
    <tr>
      <td>   Sa        </td>
      <td align="center">    240       </td>
    </tr>
    <tr>
      <td>   Re        </td>
      <td align="center">   254        </td>
    </tr>
    <tr>
      <td>      Ga     </td>
      <td align="center">       302    </td>
    </tr>
    <tr>
      <td>      Ma     </td>
      <td align="center">     320      </td>
    </tr>
    <tr>
      <td>    Pa       </td>
      <td align="center">    358.5       </td>
    </tr>
    <tr>
      <td>    Da       </td>
      <td align="center">    380       </td>
    </tr>
    <tr>
      <td>   Ni        </td>
      <td align="center">       451    </td>
    </tr>
  </tbody>
</table>

<h3>Source Code</h3>
<p> <a href="speech.sce">Additive Synthesis Scilab Code</a></p>

<? include $footer; ?>
