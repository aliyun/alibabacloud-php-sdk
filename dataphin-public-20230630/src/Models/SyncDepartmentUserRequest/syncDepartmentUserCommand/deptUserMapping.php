<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SyncDepartmentUserRequest\syncDepartmentUserCommand;

use AlibabaCloud\Dara\Model;

class deptUserMapping extends Model
{
    /**
     * @var string[]
     */
    public $departmentIdList;

    /**
     * @var string
     */
    public $sourceUserId;
    protected $_name = [
        'departmentIdList' => 'DepartmentIdList',
        'sourceUserId' => 'SourceUserId',
    ];

    public function validate()
    {
        if (\is_array($this->departmentIdList)) {
            Model::validateArray($this->departmentIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departmentIdList) {
            if (\is_array($this->departmentIdList)) {
                $res['DepartmentIdList'] = [];
                $n1 = 0;
                foreach ($this->departmentIdList as $item1) {
                    $res['DepartmentIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceUserId) {
            $res['SourceUserId'] = $this->sourceUserId;
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
        if (isset($map['DepartmentIdList'])) {
            if (!empty($map['DepartmentIdList'])) {
                $model->departmentIdList = [];
                $n1 = 0;
                foreach ($map['DepartmentIdList'] as $item1) {
                    $model->departmentIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceUserId'])) {
            $model->sourceUserId = $map['SourceUserId'];
        }

        return $model;
    }
}
