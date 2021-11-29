<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo\queueList\queue;

use AlibabaCloud\Tea\Model;

class ecmResourceQueue extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $leaf;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parentQueueId;

    /**
     * @var string
     */
    public $qualifiedName;

    /**
     * @var string
     */
    public $queueType;

    /**
     * @var int
     */
    public $resourcePoolId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'id'             => 'Id',
        'leaf'           => 'Leaf',
        'name'           => 'Name',
        'parentQueueId'  => 'ParentQueueId',
        'qualifiedName'  => 'QualifiedName',
        'queueType'      => 'QueueType',
        'resourcePoolId' => 'ResourcePoolId',
        'status'         => 'Status',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->leaf) {
            $res['Leaf'] = $this->leaf;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentQueueId) {
            $res['ParentQueueId'] = $this->parentQueueId;
        }
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }
        if (null !== $this->queueType) {
            $res['QueueType'] = $this->queueType;
        }
        if (null !== $this->resourcePoolId) {
            $res['ResourcePoolId'] = $this->resourcePoolId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Leaf'])) {
            $model->leaf = $map['Leaf'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentQueueId'])) {
            $model->parentQueueId = $map['ParentQueueId'];
        }
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }
        if (isset($map['QueueType'])) {
            $model->queueType = $map['QueueType'];
        }
        if (isset($map['ResourcePoolId'])) {
            $model->resourcePoolId = $map['ResourcePoolId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
