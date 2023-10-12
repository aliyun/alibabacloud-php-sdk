<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ModelToRole extends Model
{
    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $id;

    /**
     * @example CE6001
     *
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $modelToRoleId;

    /**
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $networkArchitectureIterationId;

    /**
     * @example ASW
     *
     * @var string
     */
    public $role;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example huawei
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'createTime'                     => 'CreateTime',
        'id'                             => 'Id',
        'model'                          => 'Model',
        'modelToRoleId'                  => 'ModelToRoleId',
        'networkArchitectureIterationId' => 'NetworkArchitectureIterationId',
        'role'                           => 'Role',
        'updateTime'                     => 'UpdateTime',
        'vendor'                         => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->modelToRoleId) {
            $res['ModelToRoleId'] = $this->modelToRoleId;
        }
        if (null !== $this->networkArchitectureIterationId) {
            $res['NetworkArchitectureIterationId'] = $this->networkArchitectureIterationId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModelToRole
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['ModelToRoleId'])) {
            $model->modelToRoleId = $map['ModelToRoleId'];
        }
        if (isset($map['NetworkArchitectureIterationId'])) {
            $model->networkArchitectureIterationId = $map['NetworkArchitectureIterationId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
