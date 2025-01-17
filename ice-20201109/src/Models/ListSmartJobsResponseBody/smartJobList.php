<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody\smartJobList\inputConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody\smartJobList\outputConfig;

class smartJobList extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $editingConfig;
    /**
     * @var inputConfig
     */
    public $inputConfig;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $jobState;
    /**
     * @var string
     */
    public $jobType;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var outputConfig
     */
    public $outputConfig;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $userData;
    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'editingConfig' => 'EditingConfig',
        'inputConfig'   => 'InputConfig',
        'jobId'         => 'JobId',
        'jobState'      => 'JobState',
        'jobType'       => 'JobType',
        'modifiedTime'  => 'ModifiedTime',
        'outputConfig'  => 'OutputConfig',
        'title'         => 'Title',
        'userData'      => 'UserData',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->inputConfig) {
            $this->inputConfig->validate();
        }
        if (null !== $this->outputConfig) {
            $this->outputConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }

        if (null !== $this->inputConfig) {
            $res['InputConfig'] = null !== $this->inputConfig ? $this->inputConfig->toArray($noStream) : $this->inputConfig;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobState) {
            $res['JobState'] = $this->jobState;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = null !== $this->outputConfig ? $this->outputConfig->toArray($noStream) : $this->outputConfig;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }

        if (isset($map['InputConfig'])) {
            $model->inputConfig = inputConfig::fromMap($map['InputConfig']);
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobState'])) {
            $model->jobState = $map['JobState'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['OutputConfig'])) {
            $model->outputConfig = outputConfig::fromMap($map['OutputConfig']);
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
