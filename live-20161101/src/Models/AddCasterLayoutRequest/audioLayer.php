<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddCasterLayoutRequest;

use AlibabaCloud\Tea\Model;

class audioLayer extends Model
{
    /**
     * @description The fixed delay of audio layer N. You can use this parameter to synchronize the audio with subtitles. Unit: milliseconds. Valid values: **0 to 5000**. Default value: **0**.
     *
     * @example 5000
     *
     * @var int
     */
    public $fixedDelayDuration;

    /**
     * @description The valid voice channels of audio layer N. Valid values:
     *
     *   **leftChannel**: the left channel.
     *   **rightChannel**: the right channel.
     *   **all**: both the left and right channels. This is the default value.
     *
     * @example all
     *
     * @var string
     */
    public $validChannel;

    /**
     * @description The multiples of the original volume at which audio layer N plays audio streams. Valid values: **0 to 10.0**.
     *
     *   The default value **1.0** indicates that audio layer N plays audio streams at the original volume.
     *   A value smaller than **1.0** indicates that audio layer N plays audio streams at a lower volume than the original one.
     *   A value greater than **1.0** indicates that audio layer N plays audio streams at a higher volume than the original one.
     *
     * @example 1.0
     *
     * @var float
     */
    public $volumeRate;
    protected $_name = [
        'fixedDelayDuration' => 'FixedDelayDuration',
        'validChannel' => 'ValidChannel',
        'volumeRate' => 'VolumeRate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
