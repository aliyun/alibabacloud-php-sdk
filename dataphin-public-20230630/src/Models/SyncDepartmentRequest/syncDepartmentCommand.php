<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SyncDepartmentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SyncDepartmentRequest\syncDepartmentCommand\departmentList;

class syncDepartmentCommand extends Model
{
    /**
     * @var departmentList[]
     */
    public $departmentList;
    protected $_name = [
        'departmentList' => 'DepartmentList',
    ];

    public function validate()
    {
        if (\is_array($this->departmentList)) {
            Model::validateArray($this->departmentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departmentList) {
            if (\is_array($this->departmentList)) {
                $res['DepartmentList'] = [];
                $n1 = 0;
                foreach ($this->departmentList as $item1) {
                    $res['DepartmentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DepartmentList'])) {
            if (!empty($map['DepartmentList'])) {
                $model->departmentList = [];
                $n1 = 0;
                foreach ($map['DepartmentList'] as $item1) {
                    $model->departmentList[$n1] = departmentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
