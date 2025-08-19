<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Dara\Model;

class SetMemberDisplayNameSyncStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $memberAccountDisplayNameSyncStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'memberAccountDisplayNameSyncStatus' => 'MemberAccountDisplayNameSyncStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
