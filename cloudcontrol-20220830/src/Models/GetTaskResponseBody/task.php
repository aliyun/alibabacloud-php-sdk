<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetTaskResponseBody;

use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetTaskResponseBody\task\error;
use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @example 2022-10-09T00:46:03Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var error
     */
    public $error;

    /**
     * @example ECS
     *
     * @var string
     */
    public $product;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example i-8vbascjthm7kzhp3****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example Instance/i-8vbascjthm7kzhp3****
     * Instance/r-8vbf5abe31c9c4d4/Account/cctest
     * @var string
     */
    public $resourcePath;

    /**
     * @example Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @example Create
     *
     * @var string
     */
    public $taskAction;

    /**
     * @example task-433aead756057fff8189a7ce5****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'createTime'   => 'createTime',
        'error'        => 'error',
        'product'      => 'product',
        'regionId'     => 'regionId',
        'resourceId'   => 'resourceId',
        'resourcePath' => 'resourcePath',
        'resourceType' => 'resourceType',
        'status'       => 'status',
        'taskAction'   => 'taskAction',
        'taskId'       => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toMap() : null;
        }
        if (null !== $this->product) {
            $res['product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourcePath) {
            $res['resourcePath'] = $this->resourcePath;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskAction) {
            $res['taskAction'] = $this->taskAction;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourcePath'])) {
            $model->resourcePath = $map['resourcePath'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['taskAction'])) {
            $model->taskAction = $map['taskAction'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
