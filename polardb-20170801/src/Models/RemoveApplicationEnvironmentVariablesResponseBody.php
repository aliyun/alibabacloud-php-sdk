<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class RemoveApplicationEnvironmentVariablesResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $ok;

    /**
     * @var int
     */
    public $removedCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $restarted;

    /**
     * @var int
     */
    public $totalVariables;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'message' => 'Message',
        'ok' => 'Ok',
        'removedCount' => 'RemovedCount',
        'requestId' => 'RequestId',
        'restarted' => 'Restarted',
        'totalVariables' => 'TotalVariables',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->ok) {
            $res['Ok'] = $this->ok;
        }

        if (null !== $this->removedCount) {
            $res['RemovedCount'] = $this->removedCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->restarted) {
            $res['Restarted'] = $this->restarted;
        }

        if (null !== $this->totalVariables) {
            $res['TotalVariables'] = $this->totalVariables;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Ok'])) {
            $model->ok = $map['Ok'];
        }

        if (isset($map['RemovedCount'])) {
            $model->removedCount = $map['RemovedCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Restarted'])) {
            $model->restarted = $map['Restarted'];
        }

        if (isset($map['TotalVariables'])) {
            $model->totalVariables = $map['TotalVariables'];
        }

        return $model;
    }
}
