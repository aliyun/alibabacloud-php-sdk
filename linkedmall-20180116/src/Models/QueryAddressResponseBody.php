<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressResponseBody\divisionAddress;
use AlibabaCloud\Tea\Model;

class QueryAddressResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var divisionAddress
     */
    public $divisionAddress;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 1A0D9B6B-EBEA-5B7C-B10D-C4455F842637
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'            => 'Code',
        'divisionAddress' => 'DivisionAddress',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
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
        if (null !== $this->divisionAddress) {
            $res['DivisionAddress'] = null !== $this->divisionAddress ? $this->divisionAddress->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DivisionAddress'])) {
            $model->divisionAddress = divisionAddress::fromMap($map['DivisionAddress']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
