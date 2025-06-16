<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class CollectFlightLowestPriceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $data;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var mixed
     */
    public $errorData;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'data' => 'data',
        'errorCode' => 'error_code',
        'errorData' => 'error_data',
        'errorMsg' => 'error_msg',
        'status' => 'status',
        'success' => 'success',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                foreach ($this->data as $key1 => $value1) {
                    $res['data'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->errorCode) {
            $res['error_code'] = $this->errorCode;
        }

        if (null !== $this->errorData) {
            $res['error_data'] = $this->errorData;
        }

        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                foreach ($map['data'] as $key1 => $value1) {
                    $model->data[$key1] = $value1;
                }
            }
        }

        if (isset($map['error_code'])) {
            $model->errorCode = $map['error_code'];
        }

        if (isset($map['error_data'])) {
            $model->errorData = $map['error_data'];
        }

        if (isset($map['error_msg'])) {
            $model->errorMsg = $map['error_msg'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
