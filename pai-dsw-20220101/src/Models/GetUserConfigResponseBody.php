<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetUserConfigResponseBody extends Model
{
    /**
     * @description 用户账号金额是否充足
     *
     * @var bool
     */
    public $accountSufficient;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountSufficient' => 'AccountSufficient',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountSufficient) {
            $res['AccountSufficient'] = $this->accountSufficient;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountSufficient'])) {
            $model->accountSufficient = $map['AccountSufficient'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
