<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountResponseBody\cloudAccount;

class GetCloudAccountResponseBody extends Model
{
    /**
     * @var cloudAccount
     */
    public $cloudAccount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cloudAccount' => 'CloudAccount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->cloudAccount) {
            $this->cloudAccount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccount) {
            $res['CloudAccount'] = null !== $this->cloudAccount ? $this->cloudAccount->toArray($noStream) : $this->cloudAccount;
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
        if (isset($map['CloudAccount'])) {
            $model->cloudAccount = cloudAccount::fromMap($map['CloudAccount']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
