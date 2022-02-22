<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduleRequest extends Model
{
    /**
     * @description 终止时间（UTC+8），精确到分钟。
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 执行时间 (UTC+8)，为空立即执行。
     *
     * @var string
     */
    public $executeTime;

    /**
     * @description 人群Id。
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 发送计划名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 重复周期，按重复周期与重复周期单位执行。
     *
     * @var int
     */
    public $repeatCycle;

    /**
     * @description 重复周期单位，若指定执行时间，则重复周期生效。
     * - 4: 月
     * @var int
     */
    public $repeatCycleUnit;

    /**
     * @description 重复次数。
     * - N: 重复N次后终止
     * @var int
     */
    public $repeatTimes;

    /**
     * @description 签名Id。
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description 模板Id。
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'endTime'         => 'EndTime',
        'executeTime'     => 'ExecuteTime',
        'groupId'         => 'GroupId',
        'name'            => 'Name',
        'repeatCycle'     => 'RepeatCycle',
        'repeatCycleUnit' => 'RepeatCycleUnit',
        'repeatTimes'     => 'RepeatTimes',
        'signatureId'     => 'SignatureId',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->repeatCycle) {
            $res['RepeatCycle'] = $this->repeatCycle;
        }
        if (null !== $this->repeatCycleUnit) {
            $res['RepeatCycleUnit'] = $this->repeatCycleUnit;
        }
        if (null !== $this->repeatTimes) {
            $res['RepeatTimes'] = $this->repeatTimes;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
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
        if (isset($map['RepeatCycle'])) {
            $model->repeatCycle = $map['RepeatCycle'];
        }
        if (isset($map['RepeatCycleUnit'])) {
            $model->repeatCycleUnit = $map['RepeatCycleUnit'];
        }
        if (isset($map['RepeatTimes'])) {
            $model->repeatTimes = $map['RepeatTimes'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
