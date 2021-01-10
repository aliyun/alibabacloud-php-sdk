<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneAudioRequest;

use AlibabaCloud\Tea\Model;

class audioLayer extends Model
{
    /**
     * @var float
     */
    public $volumeRate;

    /**
     * @var int
     */
    public $fixedDelayDuration;

    /**
     * @var string
     */
    public $validChannel;
    protected $_name = [
        'volumeRate'         => 'VolumeRate',
        'fixedDelayDuration' => 'FixedDelayDuration',
        'validChannel'       => 'ValidChannel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->volumeRate) {
            $res['VolumeRate'] = $this->volumeRate;
        }
        if (null !== $this->fixedDelayDuration) {
            $res['FixedDelayDuration'] = $this->fixedDelayDuration;
        }
        if (null !== $this->validChannel) {
            $res['ValidChannel'] = $this->validChannel;
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
        if (isset($map['VolumeRate'])) {
            $model->volumeRate = $map['VolumeRate'];
        }
        if (isset($map['FixedDelayDuration'])) {
            $model->fixedDelayDuration = $map['FixedDelayDuration'];
        }
        if (isset($map['ValidChannel'])) {
            $model->validChannel = $map['ValidChannel'];
        }

        return $model;
    }
}
