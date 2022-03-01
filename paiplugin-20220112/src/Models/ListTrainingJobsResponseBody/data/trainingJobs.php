<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListTrainingJobsResponseBody\data;

use AlibabaCloud\Tea\Model;

class trainingJobs extends Model
{
    /**
     * @description 关联算法Id。
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description 创建时间 (UTC+8)。
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 训练任务日志。
     *
     * @var string
     */
    public $history;

    /**
     * @description 训练任务Id。
     *
     * @var string
     */
    public $id;

    /**
     * @description 训练任务名称。
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
     * @description 训练任务状态。
     *
     * @var int
     */
    public $status;

    /**
     * @description 更新时间 (UTC+8)。
     *
     * @var string
     */
    public $updatedTime;

    /**
     * @description 用户配置。
     *
     * @var string
     */
    public $userConfig;
    protected $_name = [
        'algorithm'   => 'Algorithm',
        'createdTime' => 'CreatedTime',
        'history'     => 'History',
        'id'          => 'Id',
        'name'        => 'Name',
        'remark'      => 'Remark',
        'status'      => 'Status',
        'updatedTime' => 'UpdatedTime',
        'userConfig'  => 'UserConfig',
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
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
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
     * @return trainingJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
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
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['UserConfig'])) {
            $model->userConfig = $map['UserConfig'];
        }

        return $model;
    }
}
