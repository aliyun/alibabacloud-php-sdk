<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponse\audioLayers;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponse\mixList;
use AlibabaCloud\Tea\Model;

class DescribeCasterSceneAudioResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var int
     */
    public $followEnable;

    /**
     * @var audioLayers
     */
    public $audioLayers;

    /**
     * @var mixList
     */
    public $mixList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'casterId'     => 'CasterId',
        'followEnable' => 'FollowEnable',
        'audioLayers'  => 'AudioLayers',
        'mixList'      => 'MixList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('casterId', $this->casterId, true);
        Model::validateRequired('followEnable', $this->followEnable, true);
        Model::validateRequired('audioLayers', $this->audioLayers, true);
        Model::validateRequired('mixList', $this->mixList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->followEnable) {
            $res['FollowEnable'] = $this->followEnable;
        }
        if (null !== $this->audioLayers) {
            $res['AudioLayers'] = null !== $this->audioLayers ? $this->audioLayers->toMap() : null;
        }
        if (null !== $this->mixList) {
            $res['MixList'] = null !== $this->mixList ? $this->mixList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterSceneAudioResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['FollowEnable'])) {
            $model->followEnable = $map['FollowEnable'];
        }
        if (isset($map['AudioLayers'])) {
            $model->audioLayers = audioLayers::fromMap($map['AudioLayers']);
        }
        if (isset($map['MixList'])) {
            $model->mixList = mixList::fromMap($map['MixList']);
        }

        return $model;
    }
}
