<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class RetryReportTaskResponseBody extends Model
{
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
    public $outRequestNo;

    /**
     * @var bool
     */
    public $retryAvailable;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'outRequestNo' => 'outRequestNo',
        'retryAvailable' => 'retryAvailable',
        'retryCount' => 'retryCount',
        'taskStatus' => 'taskStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->outRequestNo) {
            $res['outRequestNo'] = $this->outRequestNo;
        }

        if (null !== $this->retryAvailable) {
            $res['retryAvailable'] = $this->retryAvailable;
        }

        if (null !== $this->retryCount) {
            $res['retryCount'] = $this->retryCount;
        }

        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
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
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['outRequestNo'])) {
            $model->outRequestNo = $map['outRequestNo'];
        }

        if (isset($map['retryAvailable'])) {
            $model->retryAvailable = $map['retryAvailable'];
        }

        if (isset($map['retryCount'])) {
            $model->retryCount = $map['retryCount'];
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
