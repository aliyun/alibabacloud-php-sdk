<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateProblemMeasureRequest extends Model
{
    /**
     * @example 标准
     *
     * @var string
     */
    public $checkStandard;

    /**
     * @example 123
     *
     * @var int
     */
    public $checkUserId;

    /**
     * @example 4361a0e1-6747-4834-96ce-0c4840fd3812
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 措施内容
     *
     * @var string
     */
    public $content;

    /**
     * @example 123
     *
     * @var int
     */
    public $directorId;

    /**
     * @example 2020-01-23 00:00:00
     *
     * @var string
     */
    public $planFinishTime;

    /**
     * @description This parameter is required.
     *
     * @example 23
     *
     * @var int
     */
    public $problemId;

    /**
     * @example 123
     *
     * @var int
     */
    public $stalkerId;

    /**
     * @example IMPROVED
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'checkStandard'  => 'checkStandard',
        'checkUserId'    => 'checkUserId',
        'clientToken'    => 'clientToken',
        'content'        => 'content',
        'directorId'     => 'directorId',
        'planFinishTime' => 'planFinishTime',
        'problemId'      => 'problemId',
        'stalkerId'      => 'stalkerId',
        'status'         => 'status',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkStandard) {
            $res['checkStandard'] = $this->checkStandard;
        }
        if (null !== $this->checkUserId) {
            $res['checkUserId'] = $this->checkUserId;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->directorId) {
            $res['directorId'] = $this->directorId;
        }
        if (null !== $this->planFinishTime) {
            $res['planFinishTime'] = $this->planFinishTime;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->stalkerId) {
            $res['stalkerId'] = $this->stalkerId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['checkStandard'])) {
            $model->checkStandard = $map['checkStandard'];
        }
        if (isset($map['checkUserId'])) {
            $model->checkUserId = $map['checkUserId'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['directorId'])) {
            $model->directorId = $map['directorId'];
        }
        if (isset($map['planFinishTime'])) {
            $model->planFinishTime = $map['planFinishTime'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['stalkerId'])) {
            $model->stalkerId = $map['stalkerId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
