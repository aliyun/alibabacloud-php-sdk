<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
{
    /**
     * @example 4367c30a-c686-4bb2-a45d-5affb87****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 4367c30a-c686-4bb2-a45d-5affb87f7aca
     *
     * @var string
     */
    public $departmentId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example com.test.app
     *
     * @var string
     */
    public $packageName;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'departmentId' => 'DepartmentId',
        'name'         => 'Name',
        'packageName'  => 'PackageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
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
     * @return CreateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
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
