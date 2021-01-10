<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models\DescribeStreamPredictsResponseBody;

use AlibabaCloud\Tea\Model;

class streamPredicts extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $notify;

    /**
     * @var string
     */
    public $predictId;

    /**
     * @var string
     */
    public $modelUserData;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $predictTemplateId;

    /**
     * @var string
     */
    public $streamId;

    /**
     * @var string
     */
    public $autoStart;

    /**
     * @var string
     */
    public $probabilityThresholds;

    /**
     * @var string
     */
    public $detectIntervals;

    /**
     * @var string
     */
    public $streamType;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $modelIds;

    /**
     * @var string
     */
    public $faceGroupId;
    protected $_name = [
        'creationTime'          => 'CreationTime',
        'status'                => 'Status',
        'notify'                => 'Notify',
        'predictId'             => 'PredictId',
        'modelUserData'         => 'ModelUserData',
        'output'                => 'Output',
        'predictTemplateId'     => 'PredictTemplateId',
        'streamId'              => 'StreamId',
        'autoStart'             => 'AutoStart',
        'probabilityThresholds' => 'ProbabilityThresholds',
        'detectIntervals'       => 'DetectIntervals',
        'streamType'            => 'StreamType',
        'userData'              => 'UserData',
        'modelIds'              => 'ModelIds',
        'faceGroupId'           => 'FaceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->notify) {
            $res['Notify'] = $this->notify;
        }
        if (null !== $this->predictId) {
            $res['PredictId'] = $this->predictId;
        }
        if (null !== $this->modelUserData) {
            $res['ModelUserData'] = $this->modelUserData;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->predictTemplateId) {
            $res['PredictTemplateId'] = $this->predictTemplateId;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }
        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }
        if (null !== $this->probabilityThresholds) {
            $res['ProbabilityThresholds'] = $this->probabilityThresholds;
        }
        if (null !== $this->detectIntervals) {
            $res['DetectIntervals'] = $this->detectIntervals;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->modelIds) {
            $res['ModelIds'] = $this->modelIds;
        }
        if (null !== $this->faceGroupId) {
            $res['FaceGroupId'] = $this->faceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamPredicts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Notify'])) {
            $model->notify = $map['Notify'];
        }
        if (isset($map['PredictId'])) {
            $model->predictId = $map['PredictId'];
        }
        if (isset($map['ModelUserData'])) {
            $model->modelUserData = $map['ModelUserData'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['PredictTemplateId'])) {
            $model->predictTemplateId = $map['PredictTemplateId'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }
        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }
        if (isset($map['ProbabilityThresholds'])) {
            $model->probabilityThresholds = $map['ProbabilityThresholds'];
        }
        if (isset($map['DetectIntervals'])) {
            $model->detectIntervals = $map['DetectIntervals'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['ModelIds'])) {
            $model->modelIds = $map['ModelIds'];
        }
        if (isset($map['FaceGroupId'])) {
            $model->faceGroupId = $map['FaceGroupId'];
        }

        return $model;
    }
}
