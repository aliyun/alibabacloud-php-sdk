<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class OpenStructSaseDepartment extends Model
{
    /**
     * @var string
     */
    public $departmentId;

    /**
     * @var string
     */
    public $fullDn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentDepartmentId;
    protected $_name = [
        'departmentId' => 'DepartmentId',
        'fullDn' => 'FullDn',
        'name' => 'Name',
        'parentDepartmentId' => 'ParentDepartmentId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->fullDn) {
            $res['FullDn'] = $this->fullDn;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentDepartmentId) {
            $res['ParentDepartmentId'] = $this->parentDepartmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenStructSaseDepartment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['FullDn'])) {
            $model->fullDn = $map['FullDn'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentDepartmentId'])) {
            $model->parentDepartmentId = $map['ParentDepartmentId'];
        }

        return $model;
    }
}
