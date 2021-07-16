<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateProblemMeasureRequest extends Model
{
    /**
     * @description 措施类型
     *
     * @var int
     */
    public $type;

    /**
     * @description 故障Id
     *
     * @var int
     */
    public $problemId;

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
     * @description 计划完成时间
     *
     * @var string
     */
    public $planFinishTime;

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
    protected $_name = [
        'type'           => 'type',
        'problemId'      => 'problemId',
        'content'        => 'content',
        'checkStandard'  => 'checkStandard',
        'checkUserId'    => 'checkUserId',
        'planFinishTime' => 'planFinishTime',
        'directorId'     => 'directorId',
        'stalkerId'      => 'stalkerId',
        'status'         => 'status',
        'clientToken'    => 'clientToken',
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
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
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
        if (null !== $this->planFinishTime) {
            $res['planFinishTime'] = $this->planFinishTime;
        }
        if (null !== $this->directorId) {
            $res['directorId'] = $this->directorId;
        }
        if (null !== $this->stalkerId) {
            $res['stalkerId'] = $this->stalkerId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProblemMeasureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
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
        if (isset($map['planFinishTime'])) {
            $model->planFinishTime = $map['planFinishTime'];
        }
        if (isset($map['directorId'])) {
            $model->directorId = $map['directorId'];
        }
        if (isset($map['stalkerId'])) {
            $model->stalkerId = $map['stalkerId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
