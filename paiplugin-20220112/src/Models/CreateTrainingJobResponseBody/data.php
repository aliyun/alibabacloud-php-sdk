<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateTrainingJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 关联算法ID。
     *
     * @example user_recall
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description 关联运营活动ID。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $campaignId;

    /**
     * @description 创建时间 (UTC+8)。
     *
     * @example 2020-01-01 12:00:00
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 训练数据路径，指定路径前需确保已在控制台完成一键授权。
     *
     * @example https://bucket.region.aliyuncs.com/folder/
     *
     * @var string
     */
    public $dataPath;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasModelInfo;

    /**
     * @description 训练任务日志。
     *
     * @example Error: Parameter are not found.
     *
     * @var string
     */
    public $history;

    /**
     * @description 训练任务ID。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $id;

    /**
     * @description 训练任务名称。
     *
     * @example VIP客户
     *
     * @var string
     */
    public $name;

    /**
     * @description 备注。
     *
     * @example 充值大于一万
     *
     * @var string
     */
    public $remark;

    /**
     * @description 训练任务状态。
     * - 4: 失败。
     * @example 3
     *
     * @var int
     */
    public $status;

    /**
     * @description 关联训练计划ID。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $trainingScheduleId;

    /**
     * @description 更新时间 (UTC+8)。
     *
     * @example 2020-01-01 12:00:00
     *
     * @var string
     */
    public $updatedTime;

    /**
     * @description 用户配置。
     *
     * @example {}
     *
     * @var string
     */
    public $userConfig;
    protected $_name = [
        'algorithm'          => 'Algorithm',
        'campaignId'         => 'CampaignId',
        'createdTime'        => 'CreatedTime',
        'dataPath'           => 'DataPath',
        'hasModelInfo'       => 'HasModelInfo',
        'history'            => 'History',
        'id'                 => 'Id',
        'name'               => 'Name',
        'remark'             => 'Remark',
        'status'             => 'Status',
        'trainingScheduleId' => 'TrainingScheduleId',
        'updatedTime'        => 'UpdatedTime',
        'userConfig'         => 'UserConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->dataPath) {
            $res['DataPath'] = $this->dataPath;
        }
        if (null !== $this->hasModelInfo) {
            $res['HasModelInfo'] = $this->hasModelInfo;
        }
        if (null !== $this->history) {
            $res['History'] = $this->history;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trainingScheduleId) {
            $res['TrainingScheduleId'] = $this->trainingScheduleId;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->userConfig) {
            $res['UserConfig'] = $this->userConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DataPath'])) {
            $model->dataPath = $map['DataPath'];
        }
        if (isset($map['HasModelInfo'])) {
            $model->hasModelInfo = $map['HasModelInfo'];
        }
        if (isset($map['History'])) {
            $model->history = $map['History'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrainingScheduleId'])) {
            $model->trainingScheduleId = $map['TrainingScheduleId'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['UserConfig'])) {
            $model->userConfig = $map['UserConfig'];
        }

        return $model;
    }
}
