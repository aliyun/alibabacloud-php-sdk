<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponse\reason;
use AlibabaCloud\Tea\Model;

class GetServiceLinkedRoleDeletionStatusResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var reason
     */
    public $reason;
    protected $_name = [
        'requestId' => 'RequestId',
        'status'    => 'Status',
        'reason'    => 'Reason',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('reason', $this->reason, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->reason) {
            $res['Reason'] = null !== $this->reason ? $this->reason->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceLinkedRoleDeletionStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Reason'])) {
            $model->reason = reason::fromMap($map['Reason']);
        }

        return $model;
    }
}
