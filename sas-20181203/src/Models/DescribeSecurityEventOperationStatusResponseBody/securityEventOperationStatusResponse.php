<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusResponseBody\securityEventOperationStatusResponse\securityEventOperationStatuses;

class securityEventOperationStatusResponse extends Model
{
    /**
     * @var securityEventOperationStatuses[]
     */
    public $securityEventOperationStatuses;
    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'securityEventOperationStatuses' => 'SecurityEventOperationStatuses',
        'taskStatus'                     => 'TaskStatus',
    ];

    public function validate()
    {
        if (\is_array($this->securityEventOperationStatuses)) {
            Model::validateArray($this->securityEventOperationStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityEventOperationStatuses) {
            if (\is_array($this->securityEventOperationStatuses)) {
                $res['SecurityEventOperationStatuses'] = [];
                $n1                                    = 0;
                foreach ($this->securityEventOperationStatuses as $item1) {
                    $res['SecurityEventOperationStatuses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['SecurityEventOperationStatuses'])) {
            if (!empty($map['SecurityEventOperationStatuses'])) {
                $model->securityEventOperationStatuses = [];
                $n1                                    = 0;
                foreach ($map['SecurityEventOperationStatuses'] as $item1) {
                    $model->securityEventOperationStatuses[$n1++] = securityEventOperationStatuses::fromMap($item1);
                }
            }
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
