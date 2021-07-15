<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\AddHotlineNumberRequest;

use AlibabaCloud\Tea\Model;

class outboundRangeList extends Model
{
    /**
     * @description 生效部门id
     *
     * @var int
     */
    public $departmentId;

    /**
     * @description 生效技能组列表（部门123下）
     *
     * @var int[]
     */
    public $groupIdList;
    protected $_name = [
        'departmentId' => 'DepartmentId',
        'groupIdList'  => 'GroupIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->groupIdList) {
            $res['GroupIdList'] = $this->groupIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outboundRangeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['GroupIdList'])) {
            if (!empty($map['GroupIdList'])) {
                $model->groupIdList = $map['GroupIdList'];
            }
        }

        return $model;
    }
}
