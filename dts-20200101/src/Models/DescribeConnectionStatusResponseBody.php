<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeConnectionStatusResponseBody extends Model
{
    /**
     * @description The connectivity of DTS servers to the destination database.
     *
     * @example {     "connectDetail": [       {         "testName": "PolarDB_o JDBC Connect",         "testSuccess": true       },       {         "testName": "Ping ",         "testSuccess": true       },       {         "testName": "Telnet ",         "testSuccess": true       }     ],     "connectRes": true,     "connectAdvice": ""   }
     *
     * @var mixed[]
     */
    public $destinationConnectionStatus;

    /**
     * @description The error code returned if the call failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the call failed.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The ID of the request.
     *
     * @example 0A47C784-70EF-4111-8677-369CAA00****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The connectivity of DTS servers to the source database.
     *
     * @example {     "connectDetail": [       {         "testName": "Oracle JDBC Connect",         "testSuccess": true       },       {         "testName": "Ping ",         "testSuccess": false       },       {         "testName": "Telnet ",         "testSuccess": true       }     ],     "connectRes": true,     "connectAdvice": ""   }
     *
     * @var mixed[]
     */
    public $sourceConnectionStatus;

    /**
     * @description Indicates whether the call was successful.
     *
     * @example true
     *
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
