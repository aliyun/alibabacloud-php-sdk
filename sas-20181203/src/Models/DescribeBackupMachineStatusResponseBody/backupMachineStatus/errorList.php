<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody\backupMachineStatus;

use AlibabaCloud\Tea\Model;

class errorList extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $errorFile;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorFileUrl;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorStatus;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var int
     */
    public $errorTime;
    protected $_name = [
        'key'          => 'Key',
        'errorFile'    => 'ErrorFile',
        'requestId'    => 'RequestId',
        'errorFileUrl' => 'ErrorFileUrl',
        'errorCode'    => 'ErrorCode',
        'errorStatus'  => 'ErrorStatus',
        'path'         => 'Path',
        'errorMsg'     => 'ErrorMsg',
        'errorType'    => 'ErrorType',
        'errorTime'    => 'ErrorTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->errorFile) {
            $res['ErrorFile'] = $this->errorFile;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->errorFileUrl) {
            $res['ErrorFileUrl'] = $this->errorFileUrl;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorStatus) {
            $res['ErrorStatus'] = $this->errorStatus;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }
        if (null !== $this->errorTime) {
            $res['ErrorTime'] = $this->errorTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ErrorFile'])) {
            $model->errorFile = $map['ErrorFile'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorFileUrl'])) {
            $model->errorFileUrl = $map['ErrorFileUrl'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorStatus'])) {
            $model->errorStatus = $map['ErrorStatus'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }
        if (isset($map['ErrorTime'])) {
            $model->errorTime = $map['ErrorTime'];
        }

        return $model;
    }
}
