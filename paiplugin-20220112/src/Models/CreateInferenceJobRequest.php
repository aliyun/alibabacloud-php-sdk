<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateInferenceJobRequest extends Model
{
    /**
     * @description 关联算法。
     *
     * @example user_recall
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description 关联运营活动Id。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $campaignId;

    /**
     * @description 预测数据路径。
     *
     * @example https://bucket.region.aliyuncs.com/folder/
     *
     * @var string
     */
    public $dataPath;

    /**
     * @description 预测任务名称。
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
     * @description 输出数据路径，需要为空目录。
     *
     * @example https://bucket.region.aliyuncs.com/folder/
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description 关联训练任务。
     *
     * @example 123
     *
     * @var string
     */
    public $trainingJobId;

    /**
     * @description 用户配置。
     *
     * @example {}
     *
     * @var string
     */
    public $userConfig;
    protected $_name = [
        'algorithm'     => 'Algorithm',
        'campaignId'    => 'CampaignId',
        'dataPath'      => 'DataPath',
        'name'          => 'Name',
        'remark'        => 'Remark',
        'targetPath'    => 'TargetPath',
        'trainingJobId' => 'TrainingJobId',
        'userConfig'    => 'UserConfig',
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
        if (null !== $this->dataPath) {
            $res['DataPath'] = $this->dataPath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }
        if (null !== $this->trainingJobId) {
            $res['TrainingJobId'] = $this->trainingJobId;
        }
        if (null !== $this->userConfig) {
            $res['UserConfig'] = $this->userConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInferenceJobRequest
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
        if (isset($map['DataPath'])) {
            $model->dataPath = $map['DataPath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }
        if (isset($map['TrainingJobId'])) {
            $model->trainingJobId = $map['TrainingJobId'];
        }
        if (isset($map['UserConfig'])) {
            $model->userConfig = $map['UserConfig'];
        }

        return $model;
    }
}
