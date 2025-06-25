<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostAccountResponseBody\hostAccount;

class GetHostAccountResponseBody extends Model
{
    /**
     * @var hostAccount
     */
    public $hostAccount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostAccount' => 'HostAccount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->hostAccount) {
            $this->hostAccount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostAccount) {
            $res['HostAccount'] = null !== $this->hostAccount ? $this->hostAccount->toArray($noStream) : $this->hostAccount;
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
        if (isset($map['HostAccount'])) {
            $model->hostAccount = hostAccount::fromMap($map['HostAccount']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
