<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemImprovementResponseBody\data;

use AlibabaCloud\Tea\Model;

class measureList extends Model
{
    /**
     * @var string
     */
    public $checkStandard;

    /**
     * @example 12
     *
     * @var int
     */
    public $checkUserId;

    /**
     * @var int
     */
    public $checkUserIsValid;

    /**
     * @var string
     */
    public $checkUserName;

    /**
     * @var string
     */
    public $content;

    /**
     * @example 212
     *
     * @var int
     */
    public $directorId;

    /**
     * @var int
     */
    public $directorIsValid;

    /**
     * @var string
     */
    public $directorName;

    /**
     * @example 12312
     *
     * @var int
     */
    public $measureId;

    /**
     * @example 2021-05-01 00:00:00
     *
     * @var string
     */
    public $planFinishTime;

    /**
     * @example 3121
     *
     * @var int
     */
    public $stalkerId;

    /**
     * @var int
     */
    public $stalkerIsValid;

    /**
     * @var string
     */
    public $stalkerName;

    /**
     * @example UNIMPROVED
     *
     * @var string
     */
    public $status;

    /**
     * @example 2
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'checkStandard'    => 'checkStandard',
        'checkUserId'      => 'checkUserId',
        'checkUserIsValid' => 'checkUserIsValid',
        'checkUserName'    => 'checkUserName',
        'content'          => 'content',
        'directorId'       => 'directorId',
        'directorIsValid'  => 'directorIsValid',
        'directorName'     => 'directorName',
        'measureId'        => 'measureId',
        'planFinishTime'   => 'planFinishTime',
        'stalkerId'        => 'stalkerId',
        'stalkerIsValid'   => 'stalkerIsValid',
        'stalkerName'      => 'stalkerName',
        'status'           => 'status',
        'type'             => 'type',
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
        if (null !== $this->checkUserIsValid) {
            $res['checkUserIsValid'] = $this->checkUserIsValid;
        }
        if (null !== $this->checkUserName) {
            $res['checkUserName'] = $this->checkUserName;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->directorId) {
            $res['directorId'] = $this->directorId;
        }
        if (null !== $this->directorIsValid) {
            $res['directorIsValid'] = $this->directorIsValid;
        }
        if (null !== $this->directorName) {
            $res['directorName'] = $this->directorName;
        }
        if (null !== $this->measureId) {
            $res['measureId'] = $this->measureId;
        }
        if (null !== $this->planFinishTime) {
            $res['planFinishTime'] = $this->planFinishTime;
        }
        if (null !== $this->stalkerId) {
            $res['stalkerId'] = $this->stalkerId;
        }
        if (null !== $this->stalkerIsValid) {
            $res['stalkerIsValid'] = $this->stalkerIsValid;
        }
        if (null !== $this->stalkerName) {
            $res['stalkerName'] = $this->stalkerName;
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
     * @return measureList
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
        if (isset($map['checkUserIsValid'])) {
            $model->checkUserIsValid = $map['checkUserIsValid'];
        }
        if (isset($map['checkUserName'])) {
            $model->checkUserName = $map['checkUserName'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['directorId'])) {
            $model->directorId = $map['directorId'];
        }
        if (isset($map['directorIsValid'])) {
            $model->directorIsValid = $map['directorIsValid'];
        }
        if (isset($map['directorName'])) {
            $model->directorName = $map['directorName'];
        }
        if (isset($map['measureId'])) {
            $model->measureId = $map['measureId'];
        }
        if (isset($map['planFinishTime'])) {
            $model->planFinishTime = $map['planFinishTime'];
        }
        if (isset($map['stalkerId'])) {
            $model->stalkerId = $map['stalkerId'];
        }
        if (isset($map['stalkerIsValid'])) {
            $model->stalkerIsValid = $map['stalkerIsValid'];
        }
        if (isset($map['stalkerName'])) {
            $model->stalkerName = $map['stalkerName'];
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
