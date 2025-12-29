<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class UpdateHotelResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $extentions;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $result;

    /**
     * @var int
     */
    public $statusCode;
    protected $_name = [
        'extentions' => 'Extentions',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'result' => 'Result',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
        if (\is_array($this->extentions)) {
            Model::validateArray($this->extentions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extentions) {
            if (\is_array($this->extentions)) {
                $res['Extentions'] = [];
                foreach ($this->extentions as $key1 => $value1) {
                    $res['Extentions'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extentions'])) {
            if (!empty($map['Extentions'])) {
                $model->extentions = [];
                foreach ($map['Extentions'] as $key1 => $value1) {
                    $model->extentions[$key1] = $value1;
                }
            }
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
