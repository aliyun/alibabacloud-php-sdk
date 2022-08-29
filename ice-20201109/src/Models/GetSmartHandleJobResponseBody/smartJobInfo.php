<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\smartJobInfo\inputConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\smartJobInfo\outputConfig;
use AlibabaCloud\Tea\Model;

class smartJobInfo extends Model
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
     * @var inputConfig
     */
    public $inputConfig;

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
    public $userId;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'inputConfig'  => 'InputConfig',
        'jobType'      => 'JobType',
        'modifiedTime' => 'ModifiedTime',
        'outputConfig' => 'OutputConfig',
        'title'        => 'Title',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = null !== $this->inputConfig ? $this->inputConfig->toMap() : null;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = null !== $this->outputConfig ? $this->outputConfig->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smartJobInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = inputConfig::fromMap($map['InputConfig']);
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
