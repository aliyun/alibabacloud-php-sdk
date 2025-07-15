<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponseBody\audioLayers;

use AlibabaCloud\Tea\Model;

class audioLayer extends Model
{
    /**
     * @description The fixed delay of the audio layer. Unit: milliseconds.
     *
     * @example 2000
     *
     * @var int
     */
    public $fixedDelayDuration;

    /**
     * @description The sound channel type of the audio layer. Valid values:
     *
     *   **left**: the left channel
     *   **right**: the right channel
     *   **all** (default): both the left and right channels
     *
     * @example all
     *
     * @var string
     */
    public $validChannel;

    /**
     * @description The volume of the audio layer.
     *
     * @example 1
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
