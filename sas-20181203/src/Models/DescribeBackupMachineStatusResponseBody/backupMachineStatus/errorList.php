<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody\backupMachineStatus;

use AlibabaCloud\Tea\Model;

class errorList extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorFile;

    /**
     * @var string
     */
    public $errorFileUrl;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $errorStatus;

    /**
     * @var int
     */
    public $errorTime;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorFile'    => 'ErrorFile',
        'errorFileUrl' => 'ErrorFileUrl',
        'errorMsg'     => 'ErrorMsg',
        'errorStatus'  => 'ErrorStatus',
        'errorTime'    => 'ErrorTime',
        'errorType'    => 'ErrorType',
        'key'          => 'Key',
        'path'         => 'Path',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorFile) {
            $res['ErrorFile'] = $this->errorFile;
        }
        if (null !== $this->errorFileUrl) {
            $res['ErrorFileUrl'] = $this->errorFileUrl;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->errorStatus) {
            $res['ErrorStatus'] = $this->errorStatus;
        }
        if (null !== $this->errorTime) {
            $res['ErrorTime'] = $this->errorTime;
        }
        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorFile'])) {
            $model->errorFile = $map['ErrorFile'];
        }
        if (isset($map['ErrorFileUrl'])) {
            $model->errorFileUrl = $map['ErrorFileUrl'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['ErrorStatus'])) {
            $model->errorStatus = $map['ErrorStatus'];
        }
        if (isset($map['ErrorTime'])) {
            $model->errorTime = $map['ErrorTime'];
        }
        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
