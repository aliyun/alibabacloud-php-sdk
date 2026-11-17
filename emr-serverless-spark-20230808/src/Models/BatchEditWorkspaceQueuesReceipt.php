<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class BatchEditWorkspaceQueuesReceipt extends Model
{
    /**
     * @var string[]
     */
    public $acceptedQueues;

    /**
     * @var string[]
     */
    public $skippedQueues;

    /**
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'acceptedQueues' => 'acceptedQueues',
        'skippedQueues' => 'skippedQueues',
        'workflowInstanceId' => 'workflowInstanceId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->acceptedQueues)) {
            Model::validateArray($this->acceptedQueues);
        }
        if (\is_array($this->skippedQueues)) {
            Model::validateArray($this->skippedQueues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptedQueues) {
            if (\is_array($this->acceptedQueues)) {
                $res['acceptedQueues'] = [];
                $n1 = 0;
                foreach ($this->acceptedQueues as $item1) {
                    $res['acceptedQueues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skippedQueues) {
            if (\is_array($this->skippedQueues)) {
                $res['skippedQueues'] = [];
                $n1 = 0;
                foreach ($this->skippedQueues as $item1) {
                    $res['skippedQueues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workflowInstanceId) {
            $res['workflowInstanceId'] = $this->workflowInstanceId;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['acceptedQueues'])) {
            if (!empty($map['acceptedQueues'])) {
                $model->acceptedQueues = [];
                $n1 = 0;
                foreach ($map['acceptedQueues'] as $item1) {
                    $model->acceptedQueues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['skippedQueues'])) {
            if (!empty($map['skippedQueues'])) {
                $model->skippedQueues = [];
                $n1 = 0;
                foreach ($map['skippedQueues'] as $item1) {
                    $model->skippedQueues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['workflowInstanceId'])) {
            $model->workflowInstanceId = $map['workflowInstanceId'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
