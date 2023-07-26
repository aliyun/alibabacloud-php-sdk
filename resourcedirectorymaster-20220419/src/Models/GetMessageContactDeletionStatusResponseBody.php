<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactDeletionStatusResponseBody\contactDeletionStatus;
use AlibabaCloud\Tea\Model;

class GetMessageContactDeletionStatusResponseBody extends Model
{
    /**
     * @description The deletion information of the contact.
     *
     * @var contactDeletionStatus
     */
    public $contactDeletionStatus;

    /**
     * @description The request ID.
     *
     * @example 95060F1D-6990-4645-8920-A81D1BBFE992
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contactDeletionStatus' => 'ContactDeletionStatus',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactDeletionStatus) {
            $res['ContactDeletionStatus'] = null !== $this->contactDeletionStatus ? $this->contactDeletionStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMessageContactDeletionStatusResponseBody
     */
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
