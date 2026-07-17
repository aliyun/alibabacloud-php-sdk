<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListComputeEngineJobResponseBody;

use AlibabaCloud\Dara\Model;

class jobList extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var mixed[]
     */
    public $extraInfo;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'appName' => 'AppName',
        'createTime' => 'CreateTime',
        'endpoint' => 'Endpoint',
        'extraInfo' => 'ExtraInfo',
        'finishTime' => 'FinishTime',
        'jobId' => 'JobId',
        'message' => 'Message',
        'reason' => 'Reason',
        'startedAt' => 'StartedAt',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['ExtraInfo'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['ExtraInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->startedAt) {
            $res['StartedAt'] = $this->startedAt;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['ExtraInfo'])) {
            if (!empty($map['ExtraInfo'])) {
                $model->extraInfo = [];
                foreach ($map['ExtraInfo'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['StartedAt'])) {
            $model->startedAt = $map['StartedAt'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
