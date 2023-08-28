<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class CreateHotelResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $extentions;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 73C67BD9-175A-1324-8202-9FAABBB3E6FA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 5abfd9***2c38661
     *
     * @var string
     */
    public $result;

    /**
     * @example 200
     *
     * @var int
     */
    public $statusCode;
    protected $_name = [
        'extentions' => 'Extentions',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'result'     => 'Result',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extentions) {
            $res['Extentions'] = $this->extentions;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHotelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extentions'])) {
            $model->extentions = $map['Extentions'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}