<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountRoleResponseBody\cloudAccountRole;

class GetCloudAccountRoleResponseBody extends Model
{
    /**
     * @var cloudAccountRole
     */
    public $cloudAccountRole;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cloudAccountRole' => 'CloudAccountRole',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->cloudAccountRole) {
            $this->cloudAccountRole->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccountRole) {
            $res['CloudAccountRole'] = null !== $this->cloudAccountRole ? $this->cloudAccountRole->toArray($noStream) : $this->cloudAccountRole;
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
        if (isset($map['CloudAccountRole'])) {
            $model->cloudAccountRole = cloudAccountRole::fromMap($map['CloudAccountRole']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
