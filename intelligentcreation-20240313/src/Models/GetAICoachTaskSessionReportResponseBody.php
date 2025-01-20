<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class GetAICoachTaskSessionReportResponseBody extends Model
{
    /**
     * @var int
     */
    public $duration;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $evaluationResult;
    /**
     * @var bool
     */
    public $feedback;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $scriptName;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'duration'         => 'duration',
        'endTime'          => 'endTime',
        'evaluationResult' => 'evaluationResult',
        'feedback'         => 'feedback',
        'requestId'        => 'requestId',
        'scriptName'       => 'scriptName',
        'startTime'        => 'startTime',
        'status'           => 'status',
        'uid'              => 'uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->evaluationResult) {
            $res['evaluationResult'] = $this->evaluationResult;
        }

        if (null !== $this->feedback) {
            $res['feedback'] = $this->feedback;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scriptName) {
            $res['scriptName'] = $this->scriptName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['evaluationResult'])) {
            $model->evaluationResult = $map['evaluationResult'];
        }

        if (isset($map['feedback'])) {
            $model->feedback = $map['feedback'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scriptName'])) {
            $model->scriptName = $map['scriptName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
