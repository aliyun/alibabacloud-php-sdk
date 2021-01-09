<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smsintl\V20180501\Models;

use AlibabaCloud\Tea\Model;

class SmsConversionResponseBody extends Model
{
    /**
     * @var string
     */
    public $responseCode;

    /**
     * @var string
     */
    public $responseDescription;
    protected $_name = [
        'responseCode'        => 'ResponseCode',
        'responseDescription' => 'ResponseDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->responseCode) {
            $res['ResponseCode'] = $this->responseCode;
        }
        if (null !== $this->responseDescription) {
            $res['ResponseDescription'] = $this->responseDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SmsConversionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResponseCode'])) {
            $model->responseCode = $map['ResponseCode'];
        }
        if (isset($map['ResponseDescription'])) {
            $model->responseDescription = $map['ResponseDescription'];
        }

        return $model;
    }
}
