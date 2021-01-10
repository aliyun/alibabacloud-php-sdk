<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponseBody\audioLayers;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponseBody\mixList;
use AlibabaCloud\Tea\Model;

class DescribeCasterSceneAudioResponseBody extends Model
{
    /**
     * @var mixList
     */
    public $mixList;

    /**
     * @var string
     */
    public $requestId;

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
    protected $_name = [
        'mixList'      => 'MixList',
        'requestId'    => 'RequestId',
        'audioLayers'  => 'AudioLayers',
        'casterId'     => 'CasterId',
        'followEnable' => 'FollowEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mixList) {
            $res['MixList'] = null !== $this->mixList ? $this->mixList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->audioLayers) {
            $res['AudioLayers'] = null !== $this->audioLayers ? $this->audioLayers->toMap() : null;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->followEnable) {
            $res['FollowEnable'] = $this->followEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterSceneAudioResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MixList'])) {
            $model->mixList = mixList::fromMap($map['MixList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AudioLayers'])) {
            $model->audioLayers = audioLayers::fromMap($map['AudioLayers']);
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['FollowEnable'])) {
            $model->followEnable = $map['FollowEnable'];
        }

        return $model;
    }
}
