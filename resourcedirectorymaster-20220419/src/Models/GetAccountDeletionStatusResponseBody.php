<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountDeletionStatusResponseBody\rdAccountDeletionStatus;
use AlibabaCloud\Tea\Model;

class GetAccountDeletionStatusResponseBody extends Model
{
    /**
     * @description The deletion status of the member.
     *
     * @var rdAccountDeletionStatus
     */
    public $rdAccountDeletionStatus;

    /**
     * @description The ID of the request.
     *
     * @example 8AA43293-7C8F-5730-8F2D-7F864EC092C5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'rdAccountDeletionStatus' => 'RdAccountDeletionStatus',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdAccountDeletionStatus) {
            $res['RdAccountDeletionStatus'] = null !== $this->rdAccountDeletionStatus ? $this->rdAccountDeletionStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountDeletionStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdAccountDeletionStatus'])) {
            $model->rdAccountDeletionStatus = rdAccountDeletionStatus::fromMap($map['RdAccountDeletionStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
