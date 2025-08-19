<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactDeletionStatusResponseBody\contactDeletionStatus;

class GetMessageContactDeletionStatusResponseBody extends Model
{
    /**
     * @var contactDeletionStatus
     */
    public $contactDeletionStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contactDeletionStatus' => 'ContactDeletionStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->contactDeletionStatus) {
            $this->contactDeletionStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactDeletionStatus) {
            $res['ContactDeletionStatus'] = null !== $this->contactDeletionStatus ? $this->contactDeletionStatus->toArray($noStream) : $this->contactDeletionStatus;
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
        if (isset($map['ContactDeletionStatus'])) {
            $model->contactDeletionStatus = contactDeletionStatus::fromMap($map['ContactDeletionStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
