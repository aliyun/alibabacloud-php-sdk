<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusResponseBody\securityEventOperationStatusResponse\securityEventOperationStatuses;
use AlibabaCloud\Tea\Model;

class securityEventOperationStatusResponse extends Model
{
    /**
     * @description DescribeSecurityEventOperationStatus
     *
     * @var securityEventOperationStatuses[]
     */
    public $securityEventOperationStatuses;

    /**
     * @description Queries the alert events that are triggered by the same IP address rule or of the same alert type as a specific alert event if you want to handle the specific alert event in batch operation mode.
     *
     * @example Success
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'securityEventOperationStatuses' => 'SecurityEventOperationStatuses',
        'taskStatus'                     => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityEventOperationStatuses) {
            $res['SecurityEventOperationStatuses'] = [];
            if (null !== $this->securityEventOperationStatuses && \is_array($this->securityEventOperationStatuses)) {
                $n = 0;
                foreach ($this->securityEventOperationStatuses as $item) {
                    $res['SecurityEventOperationStatuses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityEventOperationStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityEventOperationStatuses'])) {
            if (!empty($map['SecurityEventOperationStatuses'])) {
                $model->securityEventOperationStatuses = [];
                $n                                     = 0;
                foreach ($map['SecurityEventOperationStatuses'] as $item) {
                    $model->securityEventOperationStatuses[$n++] = null !== $item ? securityEventOperationStatuses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
