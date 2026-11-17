<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class BatchEditWorkspaceQueuesBody extends Model
{
    /**
     * @var BatchEditQueueSpec[]
     */
    public $queues;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'queues' => 'queues',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->queues)) {
            Model::validateArray($this->queues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queues) {
            if (\is_array($this->queues)) {
                $res['queues'] = [];
                $n1 = 0;
                foreach ($this->queues as $item1) {
                    $res['queues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['queues'])) {
            if (!empty($map['queues'])) {
                $model->queues = [];
                $n1 = 0;
                foreach ($map['queues'] as $item1) {
                    $model->queues[$n1] = BatchEditQueueSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
