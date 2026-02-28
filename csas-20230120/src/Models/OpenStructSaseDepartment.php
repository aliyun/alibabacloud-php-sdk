<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class OpenStructSaseDepartment extends Model
{
    /**
     * @var string
     */
    public $departmentId;

    /**
     * @var string
     */
    public $fullDepartmentIdPath;

    /**
     * @var string
     */
    public $fullDn;

    /**
     * @var int
     */
    public $idpId;

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
        'fullDepartmentIdPath' => 'FullDepartmentIdPath',
        'fullDn' => 'FullDn',
        'idpId' => 'IdpId',
        'name' => 'Name',
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

        if (null !== $this->fullDepartmentIdPath) {
            $res['FullDepartmentIdPath'] = $this->fullDepartmentIdPath;
        }

        if (null !== $this->fullDn) {
            $res['FullDn'] = $this->fullDn;
        }

        if (null !== $this->idpId) {
            $res['IdpId'] = $this->idpId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['FullDepartmentIdPath'])) {
            $model->fullDepartmentIdPath = $map['FullDepartmentIdPath'];
        }

        if (isset($map['FullDn'])) {
            $model->fullDn = $map['FullDn'];
        }

        if (isset($map['IdpId'])) {
            $model->idpId = $map['IdpId'];
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
