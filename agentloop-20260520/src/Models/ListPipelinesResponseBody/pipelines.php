<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponseBody\pipelines\executePolicy;

class pipelines extends Model
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
     * @var executePolicy
     */
    public $executePolicy;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scheduleStatus;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'executePolicy' => 'executePolicy',
        'pipelineName' => 'pipelineName',
        'regionId' => 'regionId',
        'scheduleStatus' => 'scheduleStatus',
        'scheduleType' => 'scheduleType',
        'updateTime' => 'updateTime',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->executePolicy) {
            $this->executePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->executePolicy) {
            $res['executePolicy'] = null !== $this->executePolicy ? $this->executePolicy->toArray($noStream) : $this->executePolicy;
        }

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->scheduleStatus) {
            $res['scheduleStatus'] = $this->scheduleStatus;
        }

        if (null !== $this->scheduleType) {
            $res['scheduleType'] = $this->scheduleType;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executePolicy'])) {
            $model->executePolicy = executePolicy::fromMap($map['executePolicy']);
        }

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['scheduleStatus'])) {
            $model->scheduleStatus = $map['scheduleStatus'];
        }

        if (isset($map['scheduleType'])) {
            $model->scheduleType = $map['scheduleType'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
