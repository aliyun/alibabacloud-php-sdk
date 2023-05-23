<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduleRequest extends Model
{
    /**
     * @example 2022-02-01 12:00:00
     *
     * @var string
     */
    public $AISendEndDate;

    /**
     * @example 2022-01-01 12:00:00
     *
     * @var string
     */
    public $AISendStartDate;

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
     * @description 触达计划名称。
     *
     * @example 增长-2021-0101
     *
     * @var string
     */
    public $name;

    /**
     * @example PayAsYougo
     *
     * @var string
     */
    public $paymentType;

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
    protected $_name = [
        'AISendEndDate'   => 'AISendEndDate',
        'AISendStartDate' => 'AISendStartDate',
        'endTime'         => 'EndTime',
        'executeTime'     => 'ExecuteTime',
        'groupId'         => 'GroupId',
        'name'            => 'Name',
        'paymentType'     => 'PaymentType',
        'repeatCycle'     => 'RepeatCycle',
        'repeatCycleUnit' => 'RepeatCycleUnit',
        'repeatTimes'     => 'RepeatTimes',
        'signName'        => 'SignName',
        'signatureId'     => 'SignatureId',
        'templateCode'    => 'TemplateCode',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AISendEndDate) {
            $res['AISendEndDate'] = $this->AISendEndDate;
        }
        if (null !== $this->AISendStartDate) {
            $res['AISendStartDate'] = $this->AISendStartDate;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
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
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AISendEndDate'])) {
            $model->AISendEndDate = $map['AISendEndDate'];
        }
        if (isset($map['AISendStartDate'])) {
            $model->AISendStartDate = $map['AISendStartDate'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
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
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
