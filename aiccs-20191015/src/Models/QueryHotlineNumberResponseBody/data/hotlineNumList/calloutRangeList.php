<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data\hotlineNumList;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data\hotlineNumList\calloutRangeList\groupDOList;
use AlibabaCloud\Tea\Model;

class calloutRangeList extends Model
{
    /**
     * @description 部门id
     *
     * @var int
     */
    public $departmentId;

    /**
     * @description 部门名称
     *
     * @var string
     */
    public $departmentName;

    /**
     * @description 技能组列表
     *
     * @var groupDOList[]
     */
    public $groupDOList;
    protected $_name = [
        'departmentId'   => 'DepartmentId',
        'departmentName' => 'DepartmentName',
        'groupDOList'    => 'GroupDOList',
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
        if (null !== $this->departmentName) {
            $res['DepartmentName'] = $this->departmentName;
        }
        if (null !== $this->groupDOList) {
            $res['GroupDOList'] = [];
            if (null !== $this->groupDOList && \is_array($this->groupDOList)) {
                $n = 0;
                foreach ($this->groupDOList as $item) {
                    $res['GroupDOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return calloutRangeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['DepartmentName'])) {
            $model->departmentName = $map['DepartmentName'];
        }
        if (isset($map['GroupDOList'])) {
            if (!empty($map['GroupDOList'])) {
                $model->groupDOList = [];
                $n                  = 0;
                foreach ($map['GroupDOList'] as $item) {
                    $model->groupDOList[$n++] = null !== $item ? groupDOList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
