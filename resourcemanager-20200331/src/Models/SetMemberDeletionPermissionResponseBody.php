<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class SetMemberDeletionPermissionResponseBody extends Model
{
    /**
     * @var string
     */
    public $managementAccountId;

    /**
     * @var string
     */
    public $memberDeletionStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceDirectoryId;
    protected $_name = [
        'managementAccountId' => 'ManagementAccountId',
        'memberDeletionStatus' => 'MemberDeletionStatus',
        'requestId' => 'RequestId',
        'resourceDirectoryId' => 'ResourceDirectoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->managementAccountId) {
            $res['ManagementAccountId'] = $this->managementAccountId;
        }

        if (null !== $this->memberDeletionStatus) {
            $res['MemberDeletionStatus'] = $this->memberDeletionStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
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
        if (isset($map['ManagementAccountId'])) {
            $model->managementAccountId = $map['ManagementAccountId'];
        }

        if (isset($map['MemberDeletionStatus'])) {
            $model->memberDeletionStatus = $map['MemberDeletionStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }

        return $model;
    }
}
