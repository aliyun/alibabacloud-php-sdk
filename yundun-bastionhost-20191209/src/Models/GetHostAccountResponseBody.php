<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostAccountResponseBody\hostAccount;
use AlibabaCloud\Tea\Model;

class GetHostAccountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var hostAccount
     */
    public $hostAccount;
    protected $_name = [
        'requestId'   => 'RequestId',
        'hostAccount' => 'HostAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->hostAccount) {
            $res['HostAccount'] = null !== $this->hostAccount ? $this->hostAccount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHostAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HostAccount'])) {
            $model->hostAccount = hostAccount::fromMap($map['HostAccount']);
        }

        return $model;
    }
}
