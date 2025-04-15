<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data\hotlineNumList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data\hotlineNumList\calloutRangeList\groupDOList;

class calloutRangeList extends Model
{
    /**
     * @var int
     */
    public $departmentId;

    /**
     * @var string
     */
    public $departmentName;

    /**
     * @var groupDOList[]
     */
    public $groupDOList;
    protected $_name = [
        'departmentId' => 'DepartmentId',
        'departmentName' => 'DepartmentName',
        'groupDOList' => 'GroupDOList',
    ];

    public function validate()
    {
        if (\is_array($this->groupDOList)) {
            Model::validateArray($this->groupDOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }

        if (null !== $this->departmentName) {
            $res['DepartmentName'] = $this->departmentName;
        }

        if (null !== $this->groupDOList) {
            if (\is_array($this->groupDOList)) {
                $res['GroupDOList'] = [];
                $n1 = 0;
                foreach ($this->groupDOList as $item1) {
                    $res['GroupDOList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['DepartmentName'])) {
            $model->departmentName = $map['DepartmentName'];
        }

        if (isset($map['GroupDOList'])) {
            if (!empty($map['GroupDOList'])) {
                $model->groupDOList = [];
                $n1 = 0;
                foreach ($map['GroupDOList'] as $item1) {
                    $model->groupDOList[$n1++] = groupDOList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
