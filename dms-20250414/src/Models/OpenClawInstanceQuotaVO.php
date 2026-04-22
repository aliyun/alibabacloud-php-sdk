<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class OpenClawInstanceQuotaVO extends Model
{
    /**
     * @var string
     */
    public $aliyunAccountUid;

    /**
     * @var string
     */
    public $deepResearchCallQuota;

    /**
     * @var string
     */
    public $deepResearchCallUsed;

    /**
     * @var string
     */
    public $instanceGmtCreate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $lastMeteringTime;

    /**
     * @var string
     */
    public $modelCallQuota;

    /**
     * @var string
     */
    public $modelCallUsed;

    /**
     * @var string
     */
    public $refreshDay;

    /**
     * @var string
     */
    public $skillPlanCallQuota;

    /**
     * @var string
     */
    public $skillPlanCallUsed;
    protected $_name = [
        'aliyunAccountUid' => 'AliyunAccountUid',
        'deepResearchCallQuota' => 'DeepResearchCallQuota',
        'deepResearchCallUsed' => 'DeepResearchCallUsed',
        'instanceGmtCreate' => 'InstanceGmtCreate',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'lastMeteringTime' => 'LastMeteringTime',
        'modelCallQuota' => 'ModelCallQuota',
        'modelCallUsed' => 'ModelCallUsed',
        'refreshDay' => 'RefreshDay',
        'skillPlanCallQuota' => 'SkillPlanCallQuota',
        'skillPlanCallUsed' => 'SkillPlanCallUsed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunAccountUid) {
            $res['AliyunAccountUid'] = $this->aliyunAccountUid;
        }

        if (null !== $this->deepResearchCallQuota) {
            $res['DeepResearchCallQuota'] = $this->deepResearchCallQuota;
        }

        if (null !== $this->deepResearchCallUsed) {
            $res['DeepResearchCallUsed'] = $this->deepResearchCallUsed;
        }

        if (null !== $this->instanceGmtCreate) {
            $res['InstanceGmtCreate'] = $this->instanceGmtCreate;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->lastMeteringTime) {
            $res['LastMeteringTime'] = $this->lastMeteringTime;
        }

        if (null !== $this->modelCallQuota) {
            $res['ModelCallQuota'] = $this->modelCallQuota;
        }

        if (null !== $this->modelCallUsed) {
            $res['ModelCallUsed'] = $this->modelCallUsed;
        }

        if (null !== $this->refreshDay) {
            $res['RefreshDay'] = $this->refreshDay;
        }

        if (null !== $this->skillPlanCallQuota) {
            $res['SkillPlanCallQuota'] = $this->skillPlanCallQuota;
        }

        if (null !== $this->skillPlanCallUsed) {
            $res['SkillPlanCallUsed'] = $this->skillPlanCallUsed;
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
        if (isset($map['AliyunAccountUid'])) {
            $model->aliyunAccountUid = $map['AliyunAccountUid'];
        }

        if (isset($map['DeepResearchCallQuota'])) {
            $model->deepResearchCallQuota = $map['DeepResearchCallQuota'];
        }

        if (isset($map['DeepResearchCallUsed'])) {
            $model->deepResearchCallUsed = $map['DeepResearchCallUsed'];
        }

        if (isset($map['InstanceGmtCreate'])) {
            $model->instanceGmtCreate = $map['InstanceGmtCreate'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['LastMeteringTime'])) {
            $model->lastMeteringTime = $map['LastMeteringTime'];
        }

        if (isset($map['ModelCallQuota'])) {
            $model->modelCallQuota = $map['ModelCallQuota'];
        }

        if (isset($map['ModelCallUsed'])) {
            $model->modelCallUsed = $map['ModelCallUsed'];
        }

        if (isset($map['RefreshDay'])) {
            $model->refreshDay = $map['RefreshDay'];
        }

        if (isset($map['SkillPlanCallQuota'])) {
            $model->skillPlanCallQuota = $map['SkillPlanCallQuota'];
        }

        if (isset($map['SkillPlanCallUsed'])) {
            $model->skillPlanCallUsed = $map['SkillPlanCallUsed'];
        }

        return $model;
    }
}
