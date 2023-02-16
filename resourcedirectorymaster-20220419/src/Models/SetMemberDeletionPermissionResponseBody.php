<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class SetMemberDeletionPermissionResponseBody extends Model
{
    /**
     * @example 151266687691****
     *
     * @var string
     */
    public $managementAccountId;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $memberDeletionStatus;

    /**
     * @example C55A4CAA-9039-1DDF-91CE-FCC134513D29
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rd-3G****
     *
     * @var string
     */
    public $resourceDirectoryId;
    protected $_name = [
        'managementAccountId'  => 'ManagementAccountId',
        'memberDeletionStatus' => 'MemberDeletionStatus',
        'requestId'            => 'RequestId',
        'resourceDirectoryId'  => 'ResourceDirectoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SetMemberDeletionPermissionResponseBody
     */
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
