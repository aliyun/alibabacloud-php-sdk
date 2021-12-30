<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostAccountResponseBody\hostAccount;
use AlibabaCloud\Tea\Model;

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
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAccount) {
            $res['HostAccount'] = null !== $this->hostAccount ? $this->hostAccount->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['HostAccount'])) {
            $model->hostAccount = hostAccount::fromMap($map['HostAccount']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
