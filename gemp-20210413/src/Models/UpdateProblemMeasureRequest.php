<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateProblemMeasureRequest extends Model
{
    /**
     * @description 措施类型 码表 PROBLEM_REPLAY_IMPROVEMENT
     *
     * @var int
     */
    public $type;

    /**
     * @description 措施内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 验收标准
     *
     * @var string
     */
    public $checkStandard;

    /**
     * @description 验收人id
     *
     * @var int
     */
    public $checkUserId;

    /**
     * @description 负责人id
     *
     * @var int
     */
    public $directorId;

    /**
     * @description 跟踪人id
     *
     * @var int
     */
    public $stalkerId;

    /**
     * @description 计划完成时间
     *
     * @var string
     */
    public $planFinishTime;

    /**
     * @description 措施Id
     *
     * @var int
     */
    public $measureId;

    /**
     * @description 状态 IMPROVED 改进 2 未改进UNIMPROVED
     *
     * @var string
     */
    public $status;

    /**
     * @description 幂等校验token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 故障Id
     *
     * @var int
     */
    public $problemId;
    protected $_name = [
        'type'           => 'type',
        'content'        => 'content',
        'checkStandard'  => 'checkStandard',
        'checkUserId'    => 'checkUserId',
        'directorId'     => 'directorId',
        'stalkerId'      => 'stalkerId',
        'planFinishTime' => 'planFinishTime',
        'measureId'      => 'measureId',
        'status'         => 'status',
        'clientToken'    => 'clientToken',
        'problemId'      => 'problemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->checkStandard) {
            $res['checkStandard'] = $this->checkStandard;
        }
        if (null !== $this->checkUserId) {
            $res['checkUserId'] = $this->checkUserId;
        }
        if (null !== $this->directorId) {
            $res['directorId'] = $this->directorId;
        }
        if (null !== $this->stalkerId) {
            $res['stalkerId'] = $this->stalkerId;
        }
        if (null !== $this->planFinishTime) {
            $res['planFinishTime'] = $this->planFinishTime;
        }
        if (null !== $this->measureId) {
            $res['measureId'] = $this->measureId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProblemMeasureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['checkStandard'])) {
            $model->checkStandard = $map['checkStandard'];
        }
        if (isset($map['checkUserId'])) {
            $model->checkUserId = $map['checkUserId'];
        }
        if (isset($map['directorId'])) {
            $model->directorId = $map['directorId'];
        }
        if (isset($map['stalkerId'])) {
            $model->stalkerId = $map['stalkerId'];
        }
        if (isset($map['planFinishTime'])) {
            $model->planFinishTime = $map['planFinishTime'];
        }
        if (isset($map['measureId'])) {
            $model->measureId = $map['measureId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }

        return $model;
    }
}
