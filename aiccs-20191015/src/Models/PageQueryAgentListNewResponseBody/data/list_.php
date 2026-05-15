<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\PageQueryAgentListNewResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @var int
     */
    public $agentMode;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $applicationCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $deployBranchId;

    /**
     * @var string
     */
    public $deployBranchName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $effectiveVersionId;

    /**
     * @var string
     */
    public $effectiveVersionName;

    /**
     * @var bool
     */
    public $isAvailable;

    /**
     * @var string
     */
    public $latestPublishTime;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentMode' => 'AgentMode',
        'agentName' => 'AgentName',
        'applicationCode' => 'ApplicationCode',
        'createTime' => 'CreateTime',
        'deployBranchId' => 'DeployBranchId',
        'deployBranchName' => 'DeployBranchName',
        'description' => 'Description',
        'effectiveVersionId' => 'EffectiveVersionId',
        'effectiveVersionName' => 'EffectiveVersionName',
        'isAvailable' => 'IsAvailable',
        'latestPublishTime' => 'LatestPublishTime',
        'modifyTime' => 'ModifyTime',
        'scene' => 'Scene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentMode) {
            $res['AgentMode'] = $this->agentMode;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deployBranchId) {
            $res['DeployBranchId'] = $this->deployBranchId;
        }

        if (null !== $this->deployBranchName) {
            $res['DeployBranchName'] = $this->deployBranchName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->effectiveVersionId) {
            $res['EffectiveVersionId'] = $this->effectiveVersionId;
        }

        if (null !== $this->effectiveVersionName) {
            $res['EffectiveVersionName'] = $this->effectiveVersionName;
        }

        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }

        if (null !== $this->latestPublishTime) {
            $res['LatestPublishTime'] = $this->latestPublishTime;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentMode'])) {
            $model->agentMode = $map['AgentMode'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DeployBranchId'])) {
            $model->deployBranchId = $map['DeployBranchId'];
        }

        if (isset($map['DeployBranchName'])) {
            $model->deployBranchName = $map['DeployBranchName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EffectiveVersionId'])) {
            $model->effectiveVersionId = $map['EffectiveVersionId'];
        }

        if (isset($map['EffectiveVersionName'])) {
            $model->effectiveVersionName = $map['EffectiveVersionName'];
        }

        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }

        if (isset($map['LatestPublishTime'])) {
            $model->latestPublishTime = $map['LatestPublishTime'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
