<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponseBody\reason;
use AlibabaCloud\Tea\Model;

class GetServiceLinkedRoleDeletionStatusResponseBody extends Model
{
    /**
     * @description The reason why the deletion task failed.
     *
     * @var reason
     */
    public $reason;

    /**
     * @description The ID of the request.
     *
     * @example 07194EB1-DB50-4513-A51D-99B30D635AEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the task.
     *
     * - INTERNAL_ERROR
     * @example FAILED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'reason'    => 'Reason',
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reason) {
            $res['Reason'] = null !== $this->reason ? $this->reason->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceLinkedRoleDeletionStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Reason'])) {
            $model->reason = reason::fromMap($map['Reason']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
