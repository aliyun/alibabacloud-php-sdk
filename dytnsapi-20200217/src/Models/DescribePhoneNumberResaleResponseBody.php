<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberResaleResponseBody\twiceTelVerify;
use AlibabaCloud\Tea\Model;

class DescribePhoneNumberResaleResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example CC3BB6D2-2FDF-4321-9DCE-B38165CE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var twiceTelVerify
     */
    public $twiceTelVerify;
    protected $_name = [
        'code'           => 'Code',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'twiceTelVerify' => 'TwiceTelVerify',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->twiceTelVerify) {
            $res['TwiceTelVerify'] = null !== $this->twiceTelVerify ? $this->twiceTelVerify->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhoneNumberResaleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TwiceTelVerify'])) {
            $model->twiceTelVerify = twiceTelVerify::fromMap($map['TwiceTelVerify']);
        }

        return $model;
    }
}
