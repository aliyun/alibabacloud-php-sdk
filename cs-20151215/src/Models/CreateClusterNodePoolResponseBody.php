<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class CreateClusterNodePoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $nodepoolId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'nodepoolId' => 'nodepool_id',
        'requestId' => 'request_id',
        'taskId' => 'task_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }

        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }

        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
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
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }

        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }

        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
