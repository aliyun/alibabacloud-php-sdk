<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813\Models\ListProjectsResponseBody;

use AlibabaCloud\Tea\Model;

class projects extends Model
{
    /**
     * @var string
     */
    public $deployAvailable;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $questionCount;

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
    public $onlineServiceStatus;

    /**
     * @var string
     */
    public $testServiceStatus;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $dataStatus;

    /**
     * @var string
     */
    public $modelId;
    protected $_name = [
        'deployAvailable'     => 'DeployAvailable',
        'createTime'          => 'CreateTime',
        'projectName'         => 'ProjectName',
        'projectId'           => 'ProjectId',
        'questionCount'       => 'QuestionCount',
        'deployTime'          => 'DeployTime',
        'projectType'         => 'ProjectType',
        'onlineServiceStatus' => 'OnlineServiceStatus',
        'testServiceStatus'   => 'TestServiceStatus',
        'modelName'           => 'ModelName',
        'dataStatus'          => 'DataStatus',
        'modelId'             => 'ModelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployAvailable) {
            $res['DeployAvailable'] = $this->deployAvailable;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->questionCount) {
            $res['QuestionCount'] = $this->questionCount;
        }
        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }
        if (null !== $this->onlineServiceStatus) {
            $res['OnlineServiceStatus'] = $this->onlineServiceStatus;
        }
        if (null !== $this->testServiceStatus) {
            $res['TestServiceStatus'] = $this->testServiceStatus;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->dataStatus) {
            $res['DataStatus'] = $this->dataStatus;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployAvailable'])) {
            $model->deployAvailable = $map['DeployAvailable'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['QuestionCount'])) {
            $model->questionCount = $map['QuestionCount'];
        }
        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }
        if (isset($map['OnlineServiceStatus'])) {
            $model->onlineServiceStatus = $map['OnlineServiceStatus'];
        }
        if (isset($map['TestServiceStatus'])) {
            $model->testServiceStatus = $map['TestServiceStatus'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['DataStatus'])) {
            $model->dataStatus = $map['DataStatus'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        return $model;
    }
}
