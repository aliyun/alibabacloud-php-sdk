<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppRequest extends Model
{
    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $departmentId;

    /**
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example com.aliyun.idrs.sdk
     *
     * @var string
     */
    public $packageName;
    protected $_name = [
        'departmentId' => 'DepartmentId',
        'disabled'     => 'Disabled',
        'id'           => 'Id',
        'name'         => 'Name',
        'packageName'  => 'PackageName',
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
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }

        return $model;
    }
}
