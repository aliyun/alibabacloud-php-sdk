<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponse\audioLayers;

use AlibabaCloud\Tea\Model;

class audioLayer extends Model
{
    /**
     * @var float
     */
    public $volumeRate;

    /**
     * @var string
     */
    public $validChannel;

    /**
     * @var int
     */
    public $fixedDelayDuration;
    protected $_name = [
        'volumeRate'         => 'VolumeRate',
        'validChannel'       => 'ValidChannel',
        'fixedDelayDuration' => 'FixedDelayDuration',
    ];

    public function validate()
    {
        Model::validateRequired('volumeRate', $this->volumeRate, true);
        Model::validateRequired('validChannel', $this->validChannel, true);
        Model::validateRequired('fixedDelayDuration', $this->fixedDelayDuration, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->volumeRate) {
            $res['VolumeRate'] = $this->volumeRate;
        }
        if (null !== $this->validChannel) {
            $res['ValidChannel'] = $this->validChannel;
        }
        if (null !== $this->fixedDelayDuration) {
            $res['FixedDelayDuration'] = $this->fixedDelayDuration;
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
        if (isset($map['ValidChannel'])) {
            $model->validChannel = $map['ValidChannel'];
        }
        if (isset($map['FixedDelayDuration'])) {
            $model->fixedDelayDuration = $map['FixedDelayDuration'];
        }

        return $model;
    }
}
