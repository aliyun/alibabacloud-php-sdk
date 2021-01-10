<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\Tea\Model;

class CreateStreamPredictRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showLog;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $streamType;

    /**
     * @var string
     */
    public $streamId;

    /**
     * @var string
     */
    public $predictTemplateId;

    /**
     * @var string
     */
    public $modelIds;

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
    public $output;

    /**
     * @var string
     */
    public $notify;

    /**
     * @var string
     */
    public $autoStart;

    /**
     * @var string
     */
    public $faceGroupId;

    /**
     * @var string
     */
    public $modelUserData;
    protected $_name = [
        'ownerId'               => 'OwnerId',
        'showLog'               => 'ShowLog',
        'clientToken'           => 'ClientToken',
        'streamType'            => 'StreamType',
        'streamId'              => 'StreamId',
        'predictTemplateId'     => 'PredictTemplateId',
        'modelIds'              => 'ModelIds',
        'probabilityThresholds' => 'ProbabilityThresholds',
        'detectIntervals'       => 'DetectIntervals',
        'output'                => 'Output',
        'notify'                => 'Notify',
        'autoStart'             => 'AutoStart',
        'faceGroupId'           => 'FaceGroupId',
        'modelUserData'         => 'ModelUserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }
        if (null !== $this->predictTemplateId) {
            $res['PredictTemplateId'] = $this->predictTemplateId;
        }
        if (null !== $this->modelIds) {
            $res['ModelIds'] = $this->modelIds;
        }
        if (null !== $this->probabilityThresholds) {
            $res['ProbabilityThresholds'] = $this->probabilityThresholds;
        }
        if (null !== $this->detectIntervals) {
            $res['DetectIntervals'] = $this->detectIntervals;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->notify) {
            $res['Notify'] = $this->notify;
        }
        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }
        if (null !== $this->faceGroupId) {
            $res['FaceGroupId'] = $this->faceGroupId;
        }
        if (null !== $this->modelUserData) {
            $res['ModelUserData'] = $this->modelUserData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStreamPredictRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }
        if (isset($map['PredictTemplateId'])) {
            $model->predictTemplateId = $map['PredictTemplateId'];
        }
        if (isset($map['ModelIds'])) {
            $model->modelIds = $map['ModelIds'];
        }
        if (isset($map['ProbabilityThresholds'])) {
            $model->probabilityThresholds = $map['ProbabilityThresholds'];
        }
        if (isset($map['DetectIntervals'])) {
            $model->detectIntervals = $map['DetectIntervals'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Notify'])) {
            $model->notify = $map['Notify'];
        }
        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }
        if (isset($map['FaceGroupId'])) {
            $model->faceGroupId = $map['FaceGroupId'];
        }
        if (isset($map['ModelUserData'])) {
            $model->modelUserData = $map['ModelUserData'];
        }

        return $model;
    }
}
