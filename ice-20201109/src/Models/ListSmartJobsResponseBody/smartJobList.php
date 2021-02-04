<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody\smartJobList\inputConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody\smartJobList\outputConfig;
use AlibabaCloud\Tea\Model;

class smartJobList extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $editingConfig;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $jobState;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var inputConfig
     */
    public $inputConfig;

    /**
     * @var outputConfig
     */
    public $outputConfig;
    protected $_name = [
        'jobId'         => 'JobId',
        'title'         => 'Title',
        'description'   => 'Description',
        'userId'        => 'UserId',
        'jobType'       => 'JobType',
        'editingConfig' => 'EditingConfig',
        'userData'      => 'UserData',
        'jobState'      => 'JobState',
        'createTime'    => 'CreateTime',
        'modifiedTime'  => 'ModifiedTime',
        'inputConfig'   => 'InputConfig',
        'outputConfig'  => 'OutputConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->jobState) {
            $res['JobState'] = $this->jobState;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = null !== $this->inputConfig ? $this->inputConfig->toMap() : null;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = null !== $this->outputConfig ? $this->outputConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smartJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['JobState'])) {
            $model->jobState = $map['JobState'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = inputConfig::fromMap($map['InputConfig']);
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = outputConfig::fromMap($map['OutputConfig']);
        }

        return $model;
    }
}
