<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody\pageResult\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody\pageResult\data\rules\expressions;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody\pageResult\data\rules\userMappingList;

class rules extends Model
{
    /**
     * @var expressions[]
     */
    public $expressions;

    /**
     * @var bool
     */
    public $isDelete;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $scopeType;

    /**
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

    public function validate()
    {
        if (\is_array($this->expressions)) {
            Model::validateArray($this->expressions);
        }
        if (\is_array($this->userMappingList)) {
            Model::validateArray($this->userMappingList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expressions) {
            if (\is_array($this->expressions)) {
                $res['Expressions'] = [];
                $n1 = 0;
                foreach ($this->expressions as $item1) {
                    $res['Expressions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->userMappingList)) {
                $res['UserMappingList'] = [];
                $n1 = 0;
                foreach ($this->userMappingList as $item1) {
                    $res['UserMappingList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expressions'])) {
            if (!empty($map['Expressions'])) {
                $model->expressions = [];
                $n1 = 0;
                foreach ($map['Expressions'] as $item1) {
                    $model->expressions[$n1++] = expressions::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['UserMappingList'] as $item1) {
                    $model->userMappingList[$n1++] = userMappingList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
