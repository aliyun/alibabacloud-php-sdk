<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneAudioRequest;

use AlibabaCloud\Tea\Model;

class audioLayer extends Model
{
    /**
     * @description Specifies whether to enable the features provided by the audio 3A algorithms. This parameter consists of the following fields:
     *
     *   **enableAgc**: specifies whether to enable automatic gain control (AGC). This field is optional. Valid values: 0 and 1. **0** is the default value, which specifies that AGC is disabled. **1** specifies that AGC is enabled.
     *   **enableAns**: specifies whether to enable active noise suppression (ANS). This field is optional. Valid values: 0 and 1. **0** is the default value, which specifies that ANS is disabled. **1** specifies that ANS is enabled.
     *   **ansMode**: specifies the mode for ANS. This field is optional and takes effect only if you set **enableAns** to **1**. Valid values: 0 and 1. **0** is the default value, which specifies the speech noise reduction mode. **1** specifies the music noise reduction mode.
     *
     * >  To ensure a better noise reduction effect, we recommend that you set ansMode to 1.
     *
     *   **enableBeautify**: specifies whether to enable voice change. This field is optional. Valid values: 0 and 1. **0** is the default value, which specifies that voice change is disabled. **1** specifies that voice change is enabled.
     *   **voiceBeautifyMode**: specifies the mode for voice change. This field is optional and takes effect only if you set **enableBeautify** to **1**. Valid values: 0 and 1. **0** is the default value, which specifies the magnetic male voice mode. **1** specifies the fresh female voice mode.
     *
     * @example {   "enableAgc":0,   "enableAns":1 }
     *
     * @var string
     */
    public $filter;

    /**
     * @description The fixed delay of the audio layer. This parameter is used to synchronize the audio with subtitles.
     *
     * Unit: milliseconds. Valid values: **0 to 5000**. Default value: **0**.
     *
     * @example 0
     *
     * @var int
     */
    public $fixedDelayDuration;

    /**
     * @description The sound channels that are used for volume input in the audio layer. Valid values:
     *
     *   **leftChannel**: the left channel
     *   **rightChannel**: the right channel
     *   **all** (default): both the left and right channels
     *
     * @example all
     *
     * @var string
     */
    public $validChannel;

    /**
     * @description The multiple of the original volume at which the audio layer plays audio. Valid values: **0 to 10.0**. Default value: **1.0**.
     *
     *   **1.0**: specifies that the audio layer plays audio at the original volume.
     *   A value smaller than **1**: specifies that the audio layer plays audio at a volume that is less than the original volume.
     *   A value greater than **1**: specifies that the audio layer plays audio at a volume that is more than the original volume.
     *
     * @example 1
     *
     * @var float
     */
    public $volumeRate;
    protected $_name = [
        'filter' => 'Filter',
        'fixedDelayDuration' => 'FixedDelayDuration',
        'validChannel' => 'ValidChannel',
        'volumeRate' => 'VolumeRate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->fixedDelayDuration) {
            $res['FixedDelayDuration'] = $this->fixedDelayDuration;
        }
        if (null !== $this->validChannel) {
            $res['ValidChannel'] = $this->validChannel;
        }
        if (null !== $this->volumeRate) {
            $res['VolumeRate'] = $this->volumeRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioLayer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['FixedDelayDuration'])) {
            $model->fixedDelayDuration = $map['FixedDelayDuration'];
        }
        if (isset($map['ValidChannel'])) {
            $model->validChannel = $map['ValidChannel'];
        }
        if (isset($map['VolumeRate'])) {
            $model->volumeRate = $map['VolumeRate'];
        }

        return $model;
    }
}
