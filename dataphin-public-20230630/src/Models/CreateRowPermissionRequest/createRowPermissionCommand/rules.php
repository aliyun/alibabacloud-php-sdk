<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRowPermissionRequest\createRowPermissionCommand;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRowPermissionRequest\createRowPermissionCommand\rules\expressions;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRowPermissionRequest\createRowPermissionCommand\rules\userMappingList;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var expressions[]
     */
    public $expressions;

    /**
     * @example 1
     *
     * @var bool
     */
    public $isDelete;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description This parameter is required.
     *
     * @example SELECT_COLUMN
     *
     * @var string
     */
    public $scopeType;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var userMappingList[]
     */
    public $userMappingList;
    protected $_name = [
        'expressions' => 'Expressions',
        'isDelete' => 'IsDelete',
        'ruleName' => 'RuleName',
        'scopeType' => 'ScopeType',
        'status' => 'Status',
        'userMappingList' => 'UserMappingList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressions) {
            $res['Expressions'] = [];
            if (null !== $this->expressions && \is_array($this->expressions)) {
                $n = 0;
                foreach ($this->expressions as $item) {
                    $res['Expressions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userMappingList) {
            $res['UserMappingList'] = [];
            if (null !== $this->userMappingList && \is_array($this->userMappingList)) {
                $n = 0;
                foreach ($this->userMappingList as $item) {
                    $res['UserMappingList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expressions'])) {
            if (!empty($map['Expressions'])) {
                $model->expressions = [];
                $n = 0;
                foreach ($map['Expressions'] as $item) {
                    $model->expressions[$n++] = null !== $item ? expressions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserMappingList'])) {
            if (!empty($map['UserMappingList'])) {
                $model->userMappingList = [];
                $n = 0;
                foreach ($map['UserMappingList'] as $item) {
                    $model->userMappingList[$n++] = null !== $item ? userMappingList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
