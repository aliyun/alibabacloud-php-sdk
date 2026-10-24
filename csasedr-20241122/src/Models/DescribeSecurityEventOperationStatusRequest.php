<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models;

use AlibabaCloud\Dara\Model;

class DescribeSecurityEventOperationStatusRequest extends Model
{
    /**
     * @var int[]
     */
    public $securityEventIds;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'securityEventIds' => 'SecurityEventIds',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->securityEventIds)) {
            Model::validateArray($this->securityEventIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityEventIds) {
            if (\is_array($this->securityEventIds)) {
                $res['SecurityEventIds'] = [];
                $n1 = 0;
                foreach ($this->securityEventIds as $item1) {
                    $res['SecurityEventIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['SecurityEventIds'])) {
            if (!empty($map['SecurityEventIds'])) {
                $model->securityEventIds = [];
                $n1 = 0;
                foreach ($map['SecurityEventIds'] as $item1) {
                    $model->securityEventIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
