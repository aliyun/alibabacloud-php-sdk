<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoAnalyseTaskRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $videoUri;

    /**
     * @var string
     */
    public $grabType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $saveType;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $tgtUri;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $notifyEndpoint;
    protected $_name = [
        'project'         => 'Project',
        'videoUri'        => 'VideoUri',
        'grabType'        => 'GrabType',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
        'saveType'        => 'SaveType',
        'interval'        => 'Interval',
        'tgtUri'          => 'TgtUri',
        'notifyTopicName' => 'NotifyTopicName',
        'notifyEndpoint'  => 'NotifyEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->videoUri) {
            $res['VideoUri'] = $this->videoUri;
        }
        if (null !== $this->grabType) {
            $res['GrabType'] = $this->grabType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->saveType) {
            $res['SaveType'] = $this->saveType;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->tgtUri) {
            $res['TgtUri'] = $this->tgtUri;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoAnalyseTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['VideoUri'])) {
            $model->videoUri = $map['VideoUri'];
        }
        if (isset($map['GrabType'])) {
            $model->grabType = $map['GrabType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SaveType'])) {
            $model->saveType = $map['SaveType'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['TgtUri'])) {
            $model->tgtUri = $map['TgtUri'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }

        return $model;
    }
}
