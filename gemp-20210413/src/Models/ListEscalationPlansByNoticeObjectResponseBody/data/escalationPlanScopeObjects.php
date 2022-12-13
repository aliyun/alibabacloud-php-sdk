<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlansByNoticeObjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class escalationPlanScopeObjects extends Model
{
    /**
     * @var string
     */
    public $scope;

    /**
     * @var int
     */
    public $scopeObjectDeletedType;

    /**
     * @var int
     */
    public $scopeObjectId;

    /**
     * @var string
     */
    public $scopeObjectName;
    protected $_name = [
        'scope'                  => 'scope',
        'scopeObjectDeletedType' => 'scopeObjectDeletedType',
        'scopeObjectId'          => 'scopeObjectId',
        'scopeObjectName'        => 'scopeObjectName',
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
