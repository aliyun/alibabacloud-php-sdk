<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class RecommendRequest extends Model
{
    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $imei;

    /**
     * @var int
     */
    public $returnCount;

    /**
     * @var string
     */
    public $items;
    protected $_name = [
        'sceneId'     => 'SceneId',
        'userId'      => 'UserId',
        'ip'          => 'Ip',
        'imei'        => 'Imei',
        'returnCount' => 'ReturnCount',
        'items'       => 'Items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->imei) {
            $res['Imei'] = $this->imei;
        }
        if (null !== $this->returnCount) {
            $res['ReturnCount'] = $this->returnCount;
        }
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecommendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Imei'])) {
            $model->imei = $map['Imei'];
        }
        if (isset($map['ReturnCount'])) {
            $model->returnCount = $map['ReturnCount'];
        }
        if (isset($map['Items'])) {
            $model->items = $map['Items'];
        }

        return $model;
    }
}
