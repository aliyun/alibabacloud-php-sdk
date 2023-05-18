<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class GetPayerForAccountResponseBody extends Model
{
    /**
     * @description The ID of the settlement account.
     *
     * @example 172841235500****
     *
     * @var string
     */
    public $payerAccountId;

    /**
     * @description The name of the settlement account.
     *
     * @example Alice
     *
     * @var string
     */
    public $payerAccountName;

    /**
     * @description The ID of the request.
     *
     * @example 9B34724D-54B0-4A51-B34D-4512372FE1BE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'payerAccountId'   => 'PayerAccountId',
        'payerAccountName' => 'PayerAccountName',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payerAccountId) {
            $res['PayerAccountId'] = $this->payerAccountId;
        }
        if (null !== $this->payerAccountName) {
            $res['PayerAccountName'] = $this->payerAccountName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPayerForAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PayerAccountId'])) {
            $model->payerAccountId = $map['PayerAccountId'];
        }
        if (isset($map['PayerAccountName'])) {
            $model->payerAccountName = $map['PayerAccountName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
