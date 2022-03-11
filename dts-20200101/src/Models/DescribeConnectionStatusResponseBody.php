<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

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
        'errCode'                     => 'ErrCode',
        'errMessage'                  => 'ErrMessage',
        'requestId'                   => 'RequestId',
        'sourceConnectionStatus'      => 'SourceConnectionStatus',
        'success'                     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationConnectionStatus) {
            $res['DestinationConnectionStatus'] = $this->destinationConnectionStatus;
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
            $res['SourceConnectionStatus'] = $this->sourceConnectionStatus;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConnectionStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationConnectionStatus'])) {
            $model->destinationConnectionStatus = $map['DestinationConnectionStatus'];
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
            $model->sourceConnectionStatus = $map['SourceConnectionStatus'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
