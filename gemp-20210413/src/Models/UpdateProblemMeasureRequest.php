<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateProblemMeasureRequest extends Model
{
    /**
     * @example 2
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
     * @example 1231
     *
     * @var int
     */
    public $measureId;

    /**
     * @example 2021-01-21 00:00:00
     *
     * @var string
     */
    public $planFinishTime;

    /**
     * @example 1233
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
     * @example UNIMPROVED
     *
     * @var string
     */
    public $status;

    /**
     * @example 3
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
        'measureId'      => 'measureId',
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
        if (null !== $this->measureId) {
            $res['measureId'] = $this->measureId;
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
     * @return UpdateProblemMeasureRequest
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
        if (isset($map['measureId'])) {
            $model->measureId = $map['measureId'];
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
