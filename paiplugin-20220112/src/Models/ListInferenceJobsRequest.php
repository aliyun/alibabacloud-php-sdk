<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ListInferenceJobsRequest extends Model
{
    /**
     * @description 归属运营活动过滤。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $campaignId;

    /**
     * @example 双11活动
     *
     * @var string
     */
    public $campaignName;

    /**
     * @description 预测任务名称过滤。
     *
     * @example VIP客户
     *
     * @var string
     */
    public $name;

    /**
     * @description 分页数，从1开始，默认为1。
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小，默认为10。
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 预测任务备注过滤。
     *
     * @example 充值大于一万
     *
     * @var string
     */
    public $remark;

    /**
     * @description 预测任务状态过滤。
     * - 4: 失败。
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example test_job
     *
     * @var string
     */
    public $trainingJobName;
    protected $_name = [
        'campaignId'      => 'CampaignId',
        'campaignName'    => 'CampaignName',
        'name'            => 'Name',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'remark'          => 'Remark',
        'status'          => 'Status',
        'trainingJobName' => 'TrainingJobName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->campaignName) {
            $res['CampaignName'] = $this->campaignName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trainingJobName) {
            $res['TrainingJobName'] = $this->trainingJobName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInferenceJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }
        if (isset($map['CampaignName'])) {
            $model->campaignName = $map['CampaignName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrainingJobName'])) {
            $model->trainingJobName = $map['TrainingJobName'];
        }

        return $model;
    }
}
