<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateEscalationPlanRequest;

use AlibabaCloud\Tea\Model;

class escalationPlanScopeObjects extends Model
{
    /**
     * @example SERVICE
     *
     * @var string
     */
    public $scope;

    /**
     * @description This parameter is required.
     *
     * @example 23433
     *
     * @var int
     */
    public $scopeObjectId;
    protected $_name = [
        'scope'         => 'scope',
        'scopeObjectId' => 'scopeObjectId',
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

        return $model;
    }
}
