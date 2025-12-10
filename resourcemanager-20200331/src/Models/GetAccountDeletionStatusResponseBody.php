<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionStatusResponseBody\rdAccountDeletionStatus;

class GetAccountDeletionStatusResponseBody extends Model
{
    /**
     * @var rdAccountDeletionStatus
     */
    public $rdAccountDeletionStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'rdAccountDeletionStatus' => 'RdAccountDeletionStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->rdAccountDeletionStatus) {
            $this->rdAccountDeletionStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rdAccountDeletionStatus) {
            $res['RdAccountDeletionStatus'] = null !== $this->rdAccountDeletionStatus ? $this->rdAccountDeletionStatus->toArray($noStream) : $this->rdAccountDeletionStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RdAccountDeletionStatus'])) {
            $model->rdAccountDeletionStatus = rdAccountDeletionStatus::fromMap($map['RdAccountDeletionStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
