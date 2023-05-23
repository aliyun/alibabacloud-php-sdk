<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateScheduleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 创建时间 (UTC+8)。
     *
     * @example 2020-01-01 12:00:00
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 终止时间（UTC+8）。
     *
     * @example 2020-01-01
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 执行时间 (UTC+8)，为空立即执行。
     *
     * @example 2020-01-01 12:00:00
     *
     * @var string
     */
    public $executeTime;

    /**
     * @description 人群ID。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 触达计划ID。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $id;

    /**
     * @description 触达计划名称。
     *
     * @example 增长-2021-0101
     *
     * @var string
     */
    public $name;

    /**
     * @description 重复周期，按重复周期与重复周期单位执行。
     *
     * @example 0
     *
     * @var int
     */
    public $repeatCycle;

    /**
     * @description 重复周期单位，若指定执行时间，则重复周期生效。
     * - 4: 月。
     * @example 0
     *
     * @var int
     */
    public $repeatCycleUnit;

    /**
     * @description 重复次数。
     * - N: 重复N次后终止。
     * @example 1
     *
     * @var int
     */
    public $repeatTimes;

    /**
     * @description 签名。
     *
     * @example PAI
     *
     * @var string
     */
    public $signName;

    /**
     * @description 签名ID，或指定签名。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description 状态。
     * - 5: 发送失败。
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description 模板Code。
     *
     * @example SMS_123456
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板ID，或指定模板Code。
     *
     * @example 0a54e195-03e2-40bd-869d-b71cb302783e
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 更新时间 (UTC+8)。
     *
     * @example 2020-01-01 12:00:00
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'createdTime'     => 'CreatedTime',
        'endTime'         => 'EndTime',
        'executeTime'     => 'ExecuteTime',
        'groupId'         => 'GroupId',
        'id'              => 'Id',
        'name'            => 'Name',
        'repeatCycle'     => 'RepeatCycle',
        'repeatCycleUnit' => 'RepeatCycleUnit',
        'repeatTimes'     => 'RepeatTimes',
        'signName'        => 'SignName',
        'signatureId'     => 'SignatureId',
        'status'          => 'Status',
        'templateCode'    => 'TemplateCode',
        'templateId'      => 'TemplateId',
        'updatedTime'     => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->repeatCycle) {
            $res['RepeatCycle'] = $this->repeatCycle;
        }
        if (null !== $this->repeatCycleUnit) {
            $res['RepeatCycleUnit'] = $this->repeatCycleUnit;
        }
        if (null !== $this->repeatTimes) {
            $res['RepeatTimes'] = $this->repeatTimes;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RepeatCycle'])) {
            $model->repeatCycle = $map['RepeatCycle'];
        }
        if (isset($map['RepeatCycleUnit'])) {
            $model->repeatCycleUnit = $map['RepeatCycleUnit'];
        }
        if (isset($map['RepeatTimes'])) {
            $model->repeatTimes = $map['RepeatTimes'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
