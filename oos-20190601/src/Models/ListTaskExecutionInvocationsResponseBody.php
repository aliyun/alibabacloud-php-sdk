<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTaskExecutionInvocationsResponseBody\taskExecutionInvocations;

class ListTaskExecutionInvocationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskExecutionInvocations[]
     */
    public $taskExecutionInvocations;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskExecutionInvocations' => 'TaskExecutionInvocations',
    ];

    public function validate()
    {
        if (\is_array($this->taskExecutionInvocations)) {
            Model::validateArray($this->taskExecutionInvocations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskExecutionInvocations) {
            if (\is_array($this->taskExecutionInvocations)) {
                $res['TaskExecutionInvocations'] = [];
                $n1 = 0;
                foreach ($this->taskExecutionInvocations as $item1) {
                    $res['TaskExecutionInvocations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskExecutionInvocations'])) {
            if (!empty($map['TaskExecutionInvocations'])) {
                $model->taskExecutionInvocations = [];
                $n1 = 0;
                foreach ($map['TaskExecutionInvocations'] as $item1) {
                    $model->taskExecutionInvocations[$n1] = taskExecutionInvocations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
