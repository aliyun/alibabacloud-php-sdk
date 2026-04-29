<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreatePolarClawCronJobResponseBody\job;

class CreatePolarClawCronJobResponseBody extends Model
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
     * @var job
     */
    public $job;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $ok;

    /**
     * @var bool
     */
    public $ranImmediately;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'job' => 'Job',
        'message' => 'Message',
        'ok' => 'Ok',
        'ranImmediately' => 'RanImmediately',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->job) {
            $this->job->validate();
        }
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

        if (null !== $this->job) {
            $res['Job'] = null !== $this->job ? $this->job->toArray($noStream) : $this->job;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->ok) {
            $res['Ok'] = $this->ok;
        }

        if (null !== $this->ranImmediately) {
            $res['RanImmediately'] = $this->ranImmediately;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['Job'])) {
            $model->job = job::fromMap($map['Job']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Ok'])) {
            $model->ok = $map['Ok'];
        }

        if (isset($map['RanImmediately'])) {
            $model->ranImmediately = $map['RanImmediately'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
