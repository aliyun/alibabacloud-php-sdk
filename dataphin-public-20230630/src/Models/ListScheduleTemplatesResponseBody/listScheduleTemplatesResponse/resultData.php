<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleTemplatesResponseBody\listScheduleTemplatesResponse;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleTemplatesResponseBody\listScheduleTemplatesResponse\resultData\conditionScheduleParamList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleTemplatesResponseBody\listScheduleTemplatesResponse\resultData\customIntervalConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleTemplatesResponseBody\listScheduleTemplatesResponse\resultData\customIntervalConfigs;

class resultData extends Model
{
    /**
     * @var conditionScheduleParamList[]
     */
    public $conditionScheduleParamList;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var bool
     */
    public $customCronExpression;

    /**
     * @var customIntervalConfig
     */
    public $customIntervalConfig;

    /**
     * @var string
     */
    public $customIntervalConfigType;

    /**
     * @var customIntervalConfigs[]
     */
    public $customIntervalConfigs;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModify;

    /**
     * @var bool
     */
    public $hasReference;

    /**
     * @var string
     */
    public $modifierId;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var string
     */
    public $scheduleIntervalType;

    /**
     * @var string
     */
    public $scheduleTemplateDesc;

    /**
     * @var int
     */
    public $scheduleTemplateId;

    /**
     * @var string
     */
    public $scheduleTemplateName;

    /**
     * @var string
     */
    public $scheduleTemplateType;

    /**
     * @var int
     */
    public $scheduleType;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $validEndDate;

    /**
     * @var string
     */
    public $validStartDate;
    protected $_name = [
        'conditionScheduleParamList' => 'ConditionScheduleParamList',
        'cronExpression' => 'CronExpression',
        'customCronExpression' => 'CustomCronExpression',
        'customIntervalConfig' => 'CustomIntervalConfig',
        'customIntervalConfigType' => 'CustomIntervalConfigType',
        'customIntervalConfigs' => 'CustomIntervalConfigs',
        'gmtCreate' => 'GmtCreate',
        'gmtModify' => 'GmtModify',
        'hasReference' => 'HasReference',
        'modifierId' => 'ModifierId',
        'modifierName' => 'ModifierName',
        'scheduleIntervalType' => 'ScheduleIntervalType',
        'scheduleTemplateDesc' => 'ScheduleTemplateDesc',
        'scheduleTemplateId' => 'ScheduleTemplateId',
        'scheduleTemplateName' => 'ScheduleTemplateName',
        'scheduleTemplateType' => 'ScheduleTemplateType',
        'scheduleType' => 'ScheduleType',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
        'userName' => 'UserName',
        'validEndDate' => 'ValidEndDate',
        'validStartDate' => 'ValidStartDate',
    ];

    public function validate()
    {
        if (\is_array($this->conditionScheduleParamList)) {
            Model::validateArray($this->conditionScheduleParamList);
        }
        if (null !== $this->customIntervalConfig) {
            $this->customIntervalConfig->validate();
        }
        if (\is_array($this->customIntervalConfigs)) {
            Model::validateArray($this->customIntervalConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionScheduleParamList) {
            if (\is_array($this->conditionScheduleParamList)) {
                $res['ConditionScheduleParamList'] = [];
                $n1 = 0;
                foreach ($this->conditionScheduleParamList as $item1) {
                    $res['ConditionScheduleParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->customCronExpression) {
            $res['CustomCronExpression'] = $this->customCronExpression;
        }

        if (null !== $this->customIntervalConfig) {
            $res['CustomIntervalConfig'] = null !== $this->customIntervalConfig ? $this->customIntervalConfig->toArray($noStream) : $this->customIntervalConfig;
        }

        if (null !== $this->customIntervalConfigType) {
            $res['CustomIntervalConfigType'] = $this->customIntervalConfigType;
        }

        if (null !== $this->customIntervalConfigs) {
            if (\is_array($this->customIntervalConfigs)) {
                $res['CustomIntervalConfigs'] = [];
                $n1 = 0;
                foreach ($this->customIntervalConfigs as $item1) {
                    $res['CustomIntervalConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }

        if (null !== $this->hasReference) {
            $res['HasReference'] = $this->hasReference;
        }

        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }

        if (null !== $this->modifierName) {
            $res['ModifierName'] = $this->modifierName;
        }

        if (null !== $this->scheduleIntervalType) {
            $res['ScheduleIntervalType'] = $this->scheduleIntervalType;
        }

        if (null !== $this->scheduleTemplateDesc) {
            $res['ScheduleTemplateDesc'] = $this->scheduleTemplateDesc;
        }

        if (null !== $this->scheduleTemplateId) {
            $res['ScheduleTemplateId'] = $this->scheduleTemplateId;
        }

        if (null !== $this->scheduleTemplateName) {
            $res['ScheduleTemplateName'] = $this->scheduleTemplateName;
        }

        if (null !== $this->scheduleTemplateType) {
            $res['ScheduleTemplateType'] = $this->scheduleTemplateType;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->validEndDate) {
            $res['ValidEndDate'] = $this->validEndDate;
        }

        if (null !== $this->validStartDate) {
            $res['ValidStartDate'] = $this->validStartDate;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionScheduleParamList'])) {
            if (!empty($map['ConditionScheduleParamList'])) {
                $model->conditionScheduleParamList = [];
                $n1 = 0;
                foreach ($map['ConditionScheduleParamList'] as $item1) {
                    $model->conditionScheduleParamList[$n1] = conditionScheduleParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['CustomCronExpression'])) {
            $model->customCronExpression = $map['CustomCronExpression'];
        }

        if (isset($map['CustomIntervalConfig'])) {
            $model->customIntervalConfig = customIntervalConfig::fromMap($map['CustomIntervalConfig']);
        }

        if (isset($map['CustomIntervalConfigType'])) {
            $model->customIntervalConfigType = $map['CustomIntervalConfigType'];
        }

        if (isset($map['CustomIntervalConfigs'])) {
            if (!empty($map['CustomIntervalConfigs'])) {
                $model->customIntervalConfigs = [];
                $n1 = 0;
                foreach ($map['CustomIntervalConfigs'] as $item1) {
                    $model->customIntervalConfigs[$n1] = customIntervalConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }

        if (isset($map['HasReference'])) {
            $model->hasReference = $map['HasReference'];
        }

        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }

        if (isset($map['ModifierName'])) {
            $model->modifierName = $map['ModifierName'];
        }

        if (isset($map['ScheduleIntervalType'])) {
            $model->scheduleIntervalType = $map['ScheduleIntervalType'];
        }

        if (isset($map['ScheduleTemplateDesc'])) {
            $model->scheduleTemplateDesc = $map['ScheduleTemplateDesc'];
        }

        if (isset($map['ScheduleTemplateId'])) {
            $model->scheduleTemplateId = $map['ScheduleTemplateId'];
        }

        if (isset($map['ScheduleTemplateName'])) {
            $model->scheduleTemplateName = $map['ScheduleTemplateName'];
        }

        if (isset($map['ScheduleTemplateType'])) {
            $model->scheduleTemplateType = $map['ScheduleTemplateType'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['ValidEndDate'])) {
            $model->validEndDate = $map['ValidEndDate'];
        }

        if (isset($map['ValidStartDate'])) {
            $model->validStartDate = $map['ValidStartDate'];
        }

        return $model;
    }
}
