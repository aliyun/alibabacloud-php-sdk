<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data;

use AlibabaCloud\Tea\Model;

class escalationPlanScopeObjects extends Model
{
    /**
     * @description 范围对象类型
     *
     * @var string
     */
    public $scope;

    /**
     * @description 范围对象id
     *
     * @var int
     */
    public $scopeObjectId;

    /**
     * @description 范围对象名称
     *
     * @var string
     */
    public $scopeObjectName;
    protected $_name = [
        'scope'           => 'scope',
        'scopeObjectId'   => 'scopeObjectId',
        'scopeObjectName' => 'scopeObjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->scopeObjectId) {
            $res['scopeObjectId'] = $this->scopeObjectId;
        }
        if (null !== $this->scopeObjectName) {
            $res['scopeObjectName'] = $this->scopeObjectName;
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
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['scopeObjectId'])) {
            $model->scopeObjectId = $map['scopeObjectId'];
        }
        if (isset($map['scopeObjectName'])) {
            $model->scopeObjectName = $map['scopeObjectName'];
        }

        return $model;
    }
}
