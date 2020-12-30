<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class CreateMailAddressResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $mailAddressId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'mailAddressId' => 'MailAddressId',
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
        if (null !== $this->mailAddressId) {
            $res['MailAddressId'] = $this->mailAddressId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMailAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MailAddressId'])) {
            $model->mailAddressId = $map['MailAddressId'];
        }

        return $model;
    }
}
