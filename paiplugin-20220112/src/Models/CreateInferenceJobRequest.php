<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateInferenceJobRequest extends Model
{
    /**
     * @description 关联算法。
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description 预测任务名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 备注。
     *
     * @var string
     */
    public $remark;

    /**
     * @description 关联训练任务。
     *
     * @var string
     */
    public $trainingJobId;

    /**
     * @description 用户配置。
     *
     * @var string
     */
    public $userConfig;
    protected $_name = [
        'algorithm'     => 'Algorithm',
        'name'          => 'Name',
        'remark'        => 'Remark',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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
