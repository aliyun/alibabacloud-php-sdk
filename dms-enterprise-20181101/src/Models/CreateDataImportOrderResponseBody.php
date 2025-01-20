<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class CreateDataImportOrderResponseBody extends Model
{
    /**
     * @var int[]
     */
    public $createOrderResult;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'createOrderResult' => 'CreateOrderResult',
        'errorCode'         => 'ErrorCode',
        'errorMessage'      => 'ErrorMessage',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->createOrderResult)) {
            Model::validateArray($this->createOrderResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createOrderResult) {
            if (\is_array($this->createOrderResult)) {
                $res['CreateOrderResult'] = [];
                $n1                       = 0;
                foreach ($this->createOrderResult as $item1) {
                    $res['CreateOrderResult'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['CreateOrderResult'])) {
            if (!empty($map['CreateOrderResult'])) {
                $model->createOrderResult = [];
                $n1                       = 0;
                foreach ($map['CreateOrderResult'] as $item1) {
                    $model->createOrderResult[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
