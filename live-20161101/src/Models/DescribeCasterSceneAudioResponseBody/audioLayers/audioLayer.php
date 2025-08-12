<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponseBody\audioLayers;

use AlibabaCloud\Dara\Model;

class audioLayer extends Model
{
    /**
     * @var int
     */
    public $fixedDelayDuration;

    /**
     * @var string
     */
    public $validChannel;

    /**
     * @var float
     */
    public $volumeRate;
    protected $_name = [
        'fixedDelayDuration' => 'FixedDelayDuration',
        'validChannel' => 'ValidChannel',
        'volumeRate' => 'VolumeRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
