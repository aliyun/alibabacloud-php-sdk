<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSecurityEventOperationStatusResponseBody\securityEventOperationStatuses;
use AlibabaCloud\Tea\Model;

class DescribeSecurityEventOperationStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityEventOperationStatuses[]
     */
    public $securityEventOperationStatuses;
    protected $_name = [
        'taskStatus'                     => 'TaskStatus',
        'requestId'                      => 'RequestId',
        'securityEventOperationStatuses' => 'SecurityEventOperationStatuses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityEventOperationStatuses) {
            $res['SecurityEventOperationStatuses'] = [];
            if (null !== $this->securityEventOperationStatuses && \is_array($this->securityEventOperationStatuses)) {
                $n = 0;
                foreach ($this->securityEventOperationStatuses as $item) {
                    $res['SecurityEventOperationStatuses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityEventOperationStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityEventOperationStatuses'])) {
            if (!empty($map['SecurityEventOperationStatuses'])) {
                $model->securityEventOperationStatuses = [];
                $n                                     = 0;
                foreach ($map['SecurityEventOperationStatuses'] as $item) {
                    $model->securityEventOperationStatuses[$n++] = null !== $item ? securityEventOperationStatuses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
