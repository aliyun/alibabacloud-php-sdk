<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponseBody\reason;
use AlibabaCloud\Tea\Model;

class GetServiceLinkedRoleDeletionStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var reason
     */
    public $reason;
    protected $_name = [
        'status'    => 'Status',
        'requestId' => 'RequestId',
        'reason'    => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = null !== $this->reason ? $this->reason->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = reason::fromMap($map['Reason']);
        }

        return $model;
    }
}
