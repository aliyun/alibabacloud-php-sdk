<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionRecordsResponseBody\tasks;

use AlibabaCloud\Dara\Model;

class timeline extends Model
{
    /**
     * @var string
     */
    public $actualTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $outputContent;

    /**
     * @var string
     */
    public $scheduledTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'actualTime' => 'actualTime',
        'displayName' => 'displayName',
        'errorMessage' => 'errorMessage',
        'executionId' => 'executionId',
        'outputContent' => 'outputContent',
        'scheduledTime' => 'scheduledTime',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualTime) {
            $res['actualTime'] = $this->actualTime;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->executionId) {
            $res['executionId'] = $this->executionId;
        }

        if (null !== $this->outputContent) {
            $res['outputContent'] = $this->outputContent;
        }

        if (null !== $this->scheduledTime) {
            $res['scheduledTime'] = $this->scheduledTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['actualTime'])) {
            $model->actualTime = $map['actualTime'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['executionId'])) {
            $model->executionId = $map['executionId'];
        }

        if (isset($map['outputContent'])) {
            $model->outputContent = $map['outputContent'];
        }

        if (isset($map['scheduledTime'])) {
            $model->scheduledTime = $map['scheduledTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
