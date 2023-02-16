<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class SendVerificationCodeForBindSecureMobilePhoneResponseBody extends Model
{
    /**
     * @example 2021-12-17T07:38:41.747Z
     *
     * @var string
     */
    public $expirationDate;

    /**
     * @example DCD43660-75DD-5D15-B342-1B83FCA5B913
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'expirationDate' => 'ExpirationDate',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendVerificationCodeForBindSecureMobilePhoneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
