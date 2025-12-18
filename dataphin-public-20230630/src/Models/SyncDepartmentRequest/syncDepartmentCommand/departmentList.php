<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SyncDepartmentRequest\syncDepartmentCommand;

use AlibabaCloud\Dara\Model;

class departmentList extends Model
{
    /**
     * @var string
     */
    public $departmentId;

    /**
     * @var string
     */
    public $departmentName;

    /**
     * @var string
     */
    public $parentDepartmentId;
    protected $_name = [
        'departmentId' => 'DepartmentId',
        'departmentName' => 'DepartmentName',
        'parentDepartmentId' => 'ParentDepartmentId',
    ];

    public function validate()
    {
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

        if (null !== $this->parentDepartmentId) {
            $res['ParentDepartmentId'] = $this->parentDepartmentId;
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

        if (isset($map['ParentDepartmentId'])) {
            $model->parentDepartmentId = $map['ParentDepartmentId'];
        }

        return $model;
    }
}
