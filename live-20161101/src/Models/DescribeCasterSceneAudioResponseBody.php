<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponseBody\audioLayers;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSceneAudioResponseBody\mixList;
use AlibabaCloud\Tea\Model;

class DescribeCasterSceneAudioResponseBody extends Model
{
    /**
     * @description The configurations of the audio layers.
     *
     * @var audioLayers
     */
    public $audioLayers;

    /**
     * @description The ID of the production studio. You can specify the ID in a request to start a scene in the production studio.
     *
     * @example 97df6b7f-3490-47d2-ac50-88338765****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The audio mode. By default, the audio follows video (AFV) mode is used. Valid values:
     *
     *   **0**: the audio mixing mode
     *   **1**: the AFV mode
     *
     * @example 1
     *
     * @var int
     */
    public $followEnable;

    /**
     * @var mixList
     */
    public $mixList;

    /**
     * @description The request ID.
     *
     * @example 98745637-3490-47d2-ac50-883387567098
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioLayers) {
            $res['AudioLayers'] = null !== $this->audioLayers ? $this->audioLayers->toMap() : null;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->followEnable) {
            $res['FollowEnable'] = $this->followEnable;
        }
        if (null !== $this->mixList) {
            $res['MixList'] = null !== $this->mixList ? $this->mixList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
