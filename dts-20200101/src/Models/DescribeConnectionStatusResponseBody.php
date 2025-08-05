<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeConnectionStatusResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $destinationConnectionStatus;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $sourceConnectionStatus;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'destinationConnectionStatus' => 'DestinationConnectionStatus',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'requestId' => 'RequestId',
        'sourceConnectionStatus' => 'SourceConnectionStatus',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->destinationConnectionStatus)) {
            Model::validateArray($this->destinationConnectionStatus);
        }
        if (\is_array($this->sourceConnectionStatus)) {
            Model::validateArray($this->sourceConnectionStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationConnectionStatus) {
            if (\is_array($this->destinationConnectionStatus)) {
                $res['DestinationConnectionStatus'] = [];
                foreach ($this->destinationConnectionStatus as $key1 => $value1) {
                    $res['DestinationConnectionStatus'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceConnectionStatus) {
            if (\is_array($this->sourceConnectionStatus)) {
                $res['SourceConnectionStatus'] = [];
                foreach ($this->sourceConnectionStatus as $key1 => $value1) {
                    $res['SourceConnectionStatus'][$key1] = $value1;
                }
            }
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
        if (isset($map['DestinationConnectionStatus'])) {
            if (!empty($map['DestinationConnectionStatus'])) {
                $model->destinationConnectionStatus = [];
                foreach ($map['DestinationConnectionStatus'] as $key1 => $value1) {
                    $model->destinationConnectionStatus[$key1] = $value1;
                }
            }
        }

        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceConnectionStatus'])) {
            if (!empty($map['SourceConnectionStatus'])) {
                $model->sourceConnectionStatus = [];
                foreach ($map['SourceConnectionStatus'] as $key1 => $value1) {
                    $model->sourceConnectionStatus[$key1] = $value1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
