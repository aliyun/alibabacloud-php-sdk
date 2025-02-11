<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ResetHotlineNumberRequest;

use AlibabaCloud\Dara\Model;

class outboundRangeList extends Model
{
    /**
     * @var int
     */
    public $departmentId;
    /**
     * @var int[]
     */
    public $groupIdList;
    protected $_name = [
        'departmentId' => 'DepartmentId',
        'groupIdList'  => 'GroupIdList',
    ];

    public function validate()
    {
        if (\is_array($this->groupIdList)) {
            Model::validateArray($this->groupIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }

        if (null !== $this->groupIdList) {
            if (\is_array($this->groupIdList)) {
                $res['GroupIdList'] = [];
                $n1                 = 0;
                foreach ($this->groupIdList as $item1) {
                    $res['GroupIdList'][$n1++] = $item1;
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
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }

        if (isset($map['GroupIdList'])) {
            if (!empty($map['GroupIdList'])) {
                $model->groupIdList = [];
                $n1                 = 0;
                foreach ($map['GroupIdList'] as $item1) {
                    $model->groupIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
