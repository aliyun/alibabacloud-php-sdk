<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutRequest;

use AlibabaCloud\Tea\Model;

class audioLayer extends Model
{
    /**
     * @description The fixed delay of the audio layer. This parameter is used to synchronize the audio with subtitles. Unit: milliseconds. Default value: **0**. Valid values: **0 to 5000**.
     *
     * @example 5000
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
     * @description The normalized value of the height of the audio layer. The width of the audio layer is proportionally scaled based on this parameter.
     *
     * The default value is **0**, which indicates that the audio layer is not scaled.
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
