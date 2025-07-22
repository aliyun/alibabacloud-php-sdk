<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppCallbackSecretKeyResponseBody extends Model
{
    /**
     * @example a656b296a30xxxxxxxxxx1cd4
     *
     * @var string
     */
    public $callbackSecretKey;

    /**
     * @description Id of the request
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callbackSecretKey' => 'CallbackSecretKey',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackSecretKey) {
            $res['CallbackSecretKey'] = $this->callbackSecretKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppCallbackSecretKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackSecretKey'])) {
            $model->callbackSecretKey = $map['CallbackSecretKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
