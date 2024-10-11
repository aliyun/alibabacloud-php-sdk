<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ColdStartRankRequest extends Model
{
    /**
     * @example eg: k1:v1|k2:v2|k3:v1,v2,v3
     *
     * @var string
     */
    public $features;

    /**
     * @example abfsc
     *
     * @var string
     */
    public $imei;

    /**
     * @example 16240:video
     *
     * @var string
     */
    public $items;

    /**
     * @example sceneId
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example 1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'features' => 'features',
        'imei'     => 'imei',
        'items'    => 'items',
        'sceneId'  => 'sceneId',
        'userId'   => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->features) {
            $res['features'] = $this->features;
        }
        if (null !== $this->imei) {
            $res['imei'] = $this->imei;
        }
        if (null !== $this->items) {
            $res['items'] = $this->items;
        }
        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ColdStartRankRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['features'])) {
            $model->features = $map['features'];
        }
        if (isset($map['imei'])) {
            $model->imei = $map['imei'];
        }
        if (isset($map['items'])) {
            $model->items = $map['items'];
        }
        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
