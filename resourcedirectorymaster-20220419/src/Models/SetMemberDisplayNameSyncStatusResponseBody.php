<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class SetMemberDisplayNameSyncStatusResponseBody extends Model
{
    /**
     * @description The status of the Member Display Name Synchronization feature. Valid values:
     *
     *   Enabled
     *   Disabled
     *
     * @example Enabled
     *
     * @var string
     */
    public $memberAccountDisplayNameSyncStatus;

    /**
     * @description The request ID.
     *
     * @example 9B34724D-54B0-4A51-B34D-4512372FE1BE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'memberAccountDisplayNameSyncStatus' => 'MemberAccountDisplayNameSyncStatus',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberAccountDisplayNameSyncStatus) {
            $res['MemberAccountDisplayNameSyncStatus'] = $this->memberAccountDisplayNameSyncStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetMemberDisplayNameSyncStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberAccountDisplayNameSyncStatus'])) {
            $model->memberAccountDisplayNameSyncStatus = $map['MemberAccountDisplayNameSyncStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
