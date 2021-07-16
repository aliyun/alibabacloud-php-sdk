<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetSubscriptionResponseBody\data;

use AlibabaCloud\Tea\Model;

class scopeObjectList extends Model
{
    /**
     * @description id主键
     *
     * @var int
     */
    public $id;

    /**
     * @description 订阅范围类型 0 全部 1服务 2 流转规则
     *
     * @var string
     */
    public $scope;

    /**
     * @description 订阅范围对象关联表主键id
     *
     * @var int
     */
    public $scopeObjectId;

    /**
     * @description 订阅范围对象名称
     *
     * @var string
     */
    public $scopeObject;
    protected $_name = [
        'id'            => 'id',
        'scope'         => 'scope',
        'scopeObjectId' => 'scopeObjectId',
        'scopeObject'   => 'scopeObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->scopeObjectId) {
            $res['scopeObjectId'] = $this->scopeObjectId;
        }
        if (null !== $this->scopeObject) {
            $res['scopeObject'] = $this->scopeObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scopeObjectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['scopeObjectId'])) {
            $model->scopeObjectId = $map['scopeObjectId'];
        }
        if (isset($map['scopeObject'])) {
            $model->scopeObject = $map['scopeObject'];
        }

        return $model;
    }
}
