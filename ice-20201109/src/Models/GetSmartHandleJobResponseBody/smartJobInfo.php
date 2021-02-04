<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\smartJobInfo\inputConfig;
use AlibabaCloud\Tea\Model;

class smartJobInfo extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $userId;

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
    public $outputConfig;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $jobType;
    protected $_name = [
        'title'         => 'Title',
        'description'   => 'Description',
        'userId'        => 'UserId',
        'editingConfig' => 'EditingConfig',
        'inputConfig'   => 'InputConfig',
        'outputConfig'  => 'outputConfig',
        'createTime'    => 'CreateTime',
        'modifiedTime'  => 'ModifiedTime',
        'jobType'       => 'JobType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = null !== $this->inputConfig ? $this->inputConfig->toMap() : null;
        }
        if (null !== $this->outputConfig) {
            $res['outputConfig'] = $this->outputConfig;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = inputConfig::fromMap($map['InputConfig']);
        }
        if (isset($map['outputConfig'])) {
            $model->outputConfig = $map['outputConfig'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        return $model;
    }
}
