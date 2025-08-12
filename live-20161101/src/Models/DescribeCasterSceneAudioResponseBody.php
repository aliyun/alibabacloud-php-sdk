<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponseBody\audioLayers;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponseBody\mixList;

class DescribeCasterSceneAudioResponseBody extends Model
{
    /**
     * @var audioLayers
     */
    public $audioLayers;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var int
     */
    public $followEnable;

    /**
     * @var mixList
     */
    public $mixList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'audioLayers' => 'AudioLayers',
        'casterId' => 'CasterId',
        'followEnable' => 'FollowEnable',
        'mixList' => 'MixList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->audioLayers) {
            $this->audioLayers->validate();
        }
        if (null !== $this->mixList) {
            $this->mixList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioLayers) {
            $res['AudioLayers'] = null !== $this->audioLayers ? $this->audioLayers->toArray($noStream) : $this->audioLayers;
        }

        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->followEnable) {
            $res['FollowEnable'] = $this->followEnable;
        }

        if (null !== $this->mixList) {
            $res['MixList'] = null !== $this->mixList ? $this->mixList->toArray($noStream) : $this->mixList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AudioLayers'])) {
            $model->audioLayers = audioLayers::fromMap($map['AudioLayers']);
        }

        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        if (isset($map['FollowEnable'])) {
            $model->followEnable = $map['FollowEnable'];
        }

        if (isset($map['MixList'])) {
            $model->mixList = mixList::fromMap($map['MixList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
