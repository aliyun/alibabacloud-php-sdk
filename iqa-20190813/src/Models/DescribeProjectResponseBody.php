<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813\Models;

use AlibabaCloud\Tea\Model;

class DescribeProjectResponseBody extends Model
{
    /**
     * @var int
     */
    public $questionCount;

    /**
     * @var string
     */
    public $deployAvailable;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $onlineServiceStatus;

    /**
     * @var int
     */
    public $deployTime;

    /**
     * @var string
     */
    public $projectType;

    /**
     * @var string
     */
    public $dataStatus;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $testServiceStatus;
    protected $_name = [
        'questionCount'       => 'QuestionCount',
        'deployAvailable'     => 'DeployAvailable',
        'modelName'           => 'ModelName',
        'requestId'           => 'RequestId',
        'projectName'         => 'ProjectName',
        'createTime'          => 'CreateTime',
        'projectId'           => 'ProjectId',
        'onlineServiceStatus' => 'OnlineServiceStatus',
        'deployTime'          => 'DeployTime',
        'projectType'         => 'ProjectType',
        'dataStatus'          => 'DataStatus',
        'modelId'             => 'ModelId',
        'testServiceStatus'   => 'TestServiceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->questionCount) {
            $res['QuestionCount'] = $this->questionCount;
        }
        if (null !== $this->deployAvailable) {
            $res['DeployAvailable'] = $this->deployAvailable;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->onlineServiceStatus) {
            $res['OnlineServiceStatus'] = $this->onlineServiceStatus;
        }
        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }
        if (null !== $this->dataStatus) {
            $res['DataStatus'] = $this->dataStatus;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->testServiceStatus) {
            $res['TestServiceStatus'] = $this->testServiceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuestionCount'])) {
            $model->questionCount = $map['QuestionCount'];
        }
        if (isset($map['DeployAvailable'])) {
            $model->deployAvailable = $map['DeployAvailable'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['OnlineServiceStatus'])) {
            $model->onlineServiceStatus = $map['OnlineServiceStatus'];
        }
        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }
        if (isset($map['DataStatus'])) {
            $model->dataStatus = $map['DataStatus'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['TestServiceStatus'])) {
            $model->testServiceStatus = $map['TestServiceStatus'];
        }

        return $model;
    }
}
