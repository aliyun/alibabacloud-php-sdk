<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo\queueList\queue;

use AlibabaCloud\Tea\Model;

class ecmResourceQueue extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $resourcePoolId;

    /**
     * @var bool
     */
    public $leaf;

    /**
     * @var int
     */
    public $parentQueueId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $queueType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $qualifiedName;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'status'         => 'Status',
        'resourcePoolId' => 'ResourcePoolId',
        'leaf'           => 'Leaf',
        'parentQueueId'  => 'ParentQueueId',
        'userId'         => 'UserId',
        'queueType'      => 'QueueType',
        'name'           => 'Name',
        'qualifiedName'  => 'QualifiedName',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->resourcePoolId) {
            $res['ResourcePoolId'] = $this->resourcePoolId;
        }
        if (null !== $this->leaf) {
            $res['Leaf'] = $this->leaf;
        }
        if (null !== $this->parentQueueId) {
            $res['ParentQueueId'] = $this->parentQueueId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->queueType) {
            $res['QueueType'] = $this->queueType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecmResourceQueue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ResourcePoolId'])) {
            $model->resourcePoolId = $map['ResourcePoolId'];
        }
        if (isset($map['Leaf'])) {
            $model->leaf = $map['Leaf'];
        }
        if (isset($map['ParentQueueId'])) {
            $model->parentQueueId = $map['ParentQueueId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['QueueType'])) {
            $model->queueType = $map['QueueType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
