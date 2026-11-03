<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class InstallPolarClawSkillResponseBody extends Model
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
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $targetDir;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'message' => 'Message',
        'ok' => 'Ok',
        'operation' => 'Operation',
        'requestId' => 'RequestId',
        'slug' => 'Slug',
        'state' => 'State',
        'targetDir' => 'TargetDir',
        'taskId' => 'TaskId',
        'version' => 'Version',
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

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slug) {
            $res['Slug'] = $this->slug;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->targetDir) {
            $res['TargetDir'] = $this->targetDir;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Slug'])) {
            $model->slug = $map['Slug'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TargetDir'])) {
            $model->targetDir = $map['TargetDir'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
