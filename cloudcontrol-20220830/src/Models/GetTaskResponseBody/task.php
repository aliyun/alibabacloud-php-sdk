<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetTaskResponseBody\task\error;

class task extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var error
     */
    public $error;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourcePath;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskAction;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'createTime' => 'createTime',
        'error' => 'error',
        'product' => 'product',
        'regionId' => 'regionId',
        'resourceId' => 'resourceId',
        'resourcePath' => 'resourcePath',
        'resourceType' => 'resourceType',
        'status' => 'status',
        'taskAction' => 'taskAction',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
