<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListMarketingFlowResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $activityCode;

    /**
     * @var string
     */
    public $activityDesc;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $activityStatus;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var mixed[]
     */
    public $bizExtend;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $executionType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModifier;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $paramFlag;

    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @var string
     */
    public $relatedFlowCode;

    /**
     * @var string
     */
    public $relatedFlowName;

    /**
     * @var string
     */
    public $relatedGroupId;

    /**
     * @var string
     */
    public $relatedGroupName;

    /**
     * @var string
     */
    public $specificTime;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $tenantCode;
    protected $_name = [
        'activityCode' => 'ActivityCode',
        'activityDesc' => 'ActivityDesc',
        'activityName' => 'ActivityName',
        'activityStatus' => 'ActivityStatus',
        'bizCode' => 'BizCode',
        'bizExtend' => 'BizExtend',
        'cronExpression' => 'CronExpression',
        'endDate' => 'EndDate',
        'executionType' => 'ExecutionType',
        'gmtCreate' => 'GmtCreate',
        'gmtModifier' => 'GmtModifier',
        'id' => 'Id',
        'paramFlag' => 'ParamFlag',
        'params' => 'Params',
        'relatedFlowCode' => 'RelatedFlowCode',
        'relatedFlowName' => 'RelatedFlowName',
        'relatedGroupId' => 'RelatedGroupId',
        'relatedGroupName' => 'RelatedGroupName',
        'specificTime' => 'SpecificTime',
        'startDate' => 'StartDate',
        'tenantCode' => 'TenantCode',
    ];

    public function validate()
    {
        if (\is_array($this->bizExtend)) {
            Model::validateArray($this->bizExtend);
        }
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityCode) {
            $res['ActivityCode'] = $this->activityCode;
        }

        if (null !== $this->activityDesc) {
            $res['ActivityDesc'] = $this->activityDesc;
        }

        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }

        if (null !== $this->activityStatus) {
            $res['ActivityStatus'] = $this->activityStatus;
        }

        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->bizExtend) {
            if (\is_array($this->bizExtend)) {
                $res['BizExtend'] = [];
                foreach ($this->bizExtend as $key1 => $value1) {
                    $res['BizExtend'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->executionType) {
            $res['ExecutionType'] = $this->executionType;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModifier) {
            $res['GmtModifier'] = $this->gmtModifier;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->paramFlag) {
            $res['ParamFlag'] = $this->paramFlag;
        }

        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['Params'] = [];
                foreach ($this->params as $key1 => $value1) {
                    $res['Params'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->relatedFlowCode) {
            $res['RelatedFlowCode'] = $this->relatedFlowCode;
        }

        if (null !== $this->relatedFlowName) {
            $res['RelatedFlowName'] = $this->relatedFlowName;
        }

        if (null !== $this->relatedGroupId) {
            $res['RelatedGroupId'] = $this->relatedGroupId;
        }

        if (null !== $this->relatedGroupName) {
            $res['RelatedGroupName'] = $this->relatedGroupName;
        }

        if (null !== $this->specificTime) {
            $res['SpecificTime'] = $this->specificTime;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->tenantCode) {
            $res['TenantCode'] = $this->tenantCode;
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
        if (isset($map['ActivityCode'])) {
            $model->activityCode = $map['ActivityCode'];
        }

        if (isset($map['ActivityDesc'])) {
            $model->activityDesc = $map['ActivityDesc'];
        }

        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }

        if (isset($map['ActivityStatus'])) {
            $model->activityStatus = $map['ActivityStatus'];
        }

        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['BizExtend'])) {
            if (!empty($map['BizExtend'])) {
                $model->bizExtend = [];
                foreach ($map['BizExtend'] as $key1 => $value1) {
                    $model->bizExtend[$key1] = $value1;
                }
            }
        }

        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ExecutionType'])) {
            $model->executionType = $map['ExecutionType'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModifier'])) {
            $model->gmtModifier = $map['GmtModifier'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ParamFlag'])) {
            $model->paramFlag = $map['ParamFlag'];
        }

        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = [];
                foreach ($map['Params'] as $key1 => $value1) {
                    $model->params[$key1] = $value1;
                }
            }
        }

        if (isset($map['RelatedFlowCode'])) {
            $model->relatedFlowCode = $map['RelatedFlowCode'];
        }

        if (isset($map['RelatedFlowName'])) {
            $model->relatedFlowName = $map['RelatedFlowName'];
        }

        if (isset($map['RelatedGroupId'])) {
            $model->relatedGroupId = $map['RelatedGroupId'];
        }

        if (isset($map['RelatedGroupName'])) {
            $model->relatedGroupName = $map['RelatedGroupName'];
        }

        if (isset($map['SpecificTime'])) {
            $model->specificTime = $map['SpecificTime'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['TenantCode'])) {
            $model->tenantCode = $map['TenantCode'];
        }

        return $model;
    }
}
