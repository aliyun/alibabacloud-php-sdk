<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataTasksResponseBody\result\sinkCluster;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataTasksResponseBody\result\sourceCluster;

class result extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var sinkCluster
     */
    public $sinkCluster;

    /**
     * @var sourceCluster
     */
    public $sourceCluster;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'createTime' => 'createTime',
        'sinkCluster' => 'sinkCluster',
        'sourceCluster' => 'sourceCluster',
        'status' => 'status',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (null !== $this->sinkCluster) {
            $this->sinkCluster->validate();
        }
        if (null !== $this->sourceCluster) {
            $this->sourceCluster->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->sinkCluster) {
            $res['sinkCluster'] = null !== $this->sinkCluster ? $this->sinkCluster->toArray($noStream) : $this->sinkCluster;
        }

        if (null !== $this->sourceCluster) {
            $res['sourceCluster'] = null !== $this->sourceCluster ? $this->sourceCluster->toArray($noStream) : $this->sourceCluster;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['sinkCluster'])) {
            $model->sinkCluster = sinkCluster::fromMap($map['sinkCluster']);
        }

        if (isset($map['sourceCluster'])) {
            $model->sourceCluster = sourceCluster::fromMap($map['sourceCluster']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
