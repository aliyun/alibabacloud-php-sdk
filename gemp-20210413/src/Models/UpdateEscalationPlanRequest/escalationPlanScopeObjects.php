<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateEscalationPlanRequest;

use AlibabaCloud\Tea\Model;

class escalationPlanScopeObjects extends Model
{
    /**
     * @description 主键
     *
     * @var int
     */
    public $id;

    /**
     * @description 范围对象id
     *
     * @var int
     */
    public $scopeObjectId;

    /**
     * @description 范围对象类型
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'id'            => 'id',
        'scopeObjectId' => 'scopeObjectId',
        'scope'         => 'scope',
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
        if (null !== $this->scopeObjectId) {
            $res['scopeObjectId'] = $this->scopeObjectId;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalationPlanScopeObjects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['scopeObjectId'])) {
            $model->scopeObjectId = $map['scopeObjectId'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        return $model;
    }
}
