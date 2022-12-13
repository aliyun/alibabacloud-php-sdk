<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data;

use AlibabaCloud\Tea\Model;

class escalationPlanScopeObjects extends Model
{
    /**
     * @var int
     */
    public $escalationPlanScopeObjects;

    /**
     * @example SERVICE
     *
     * @var string
     */
    public $scope;

    /**
     * @var int
     */
    public $scopeObjectDeletedType;

    /**
     * @example 234
     *
     * @var int
     */
    public $scopeObjectId;

    /**
     * @example xx服务
     *
     * @var string
     */
    public $scopeObjectName;
    protected $_name = [
        'escalationPlanScopeObjects' => 'escalationPlanScopeObjects',
        'scope'                      => 'scope',
        'scopeObjectDeletedType'     => 'scopeObjectDeletedType',
        'scopeObjectId'              => 'scopeObjectId',
        'scopeObjectName'            => 'scopeObjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlanScopeObjects) {
            $res['escalationPlanScopeObjects'] = $this->escalationPlanScopeObjects;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->scopeObjectDeletedType) {
            $res['scopeObjectDeletedType'] = $this->scopeObjectDeletedType;
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
        if (isset($map['escalationPlanScopeObjects'])) {
            $model->escalationPlanScopeObjects = $map['escalationPlanScopeObjects'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['scopeObjectDeletedType'])) {
            $model->scopeObjectDeletedType = $map['scopeObjectDeletedType'];
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
