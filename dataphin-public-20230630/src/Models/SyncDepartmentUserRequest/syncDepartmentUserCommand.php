<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SyncDepartmentUserRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SyncDepartmentUserRequest\syncDepartmentUserCommand\deptUserMapping;

class syncDepartmentUserCommand extends Model
{
    /**
     * @var deptUserMapping[]
     */
    public $deptUserMapping;
    protected $_name = [
        'deptUserMapping' => 'DeptUserMapping',
    ];

    public function validate()
    {
        if (\is_array($this->deptUserMapping)) {
            Model::validateArray($this->deptUserMapping);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deptUserMapping) {
            if (\is_array($this->deptUserMapping)) {
                $res['DeptUserMapping'] = [];
                $n1 = 0;
                foreach ($this->deptUserMapping as $item1) {
                    $res['DeptUserMapping'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeptUserMapping'])) {
            if (!empty($map['DeptUserMapping'])) {
                $model->deptUserMapping = [];
                $n1 = 0;
                foreach ($map['DeptUserMapping'] as $item1) {
                    $model->deptUserMapping[$n1] = deptUserMapping::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
