<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class AgentServiceOrderVO extends Model
{
    /**
     * @var string
     */
    public $agentService;

    /**
     * @var int
     */
    public $deepResearchQuota;

    /**
     * @var int
     */
    public $deepResearchUsed;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $modelCallQuota;

    /**
     * @var int
     */
    public $modelCallUsed;

    /**
     * @var string
     */
    public $orderInstanceId;

    /**
     * @var int
     */
    public $serviceNum;

    /**
     * @var int
     */
    public $skillPlanCallQuota;

    /**
     * @var int
     */
    public $skillPlanCallUsed;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'agentService' => 'AgentService',
        'deepResearchQuota' => 'DeepResearchQuota',
        'deepResearchUsed' => 'DeepResearchUsed',
        'expireTime' => 'ExpireTime',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'modelCallQuota' => 'ModelCallQuota',
        'modelCallUsed' => 'ModelCallUsed',
        'orderInstanceId' => 'OrderInstanceId',
        'serviceNum' => 'ServiceNum',
        'skillPlanCallQuota' => 'SkillPlanCallQuota',
        'skillPlanCallUsed' => 'SkillPlanCallUsed',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentService) {
            $res['AgentService'] = $this->agentService;
        }

        if (null !== $this->deepResearchQuota) {
            $res['DeepResearchQuota'] = $this->deepResearchQuota;
        }

        if (null !== $this->deepResearchUsed) {
            $res['DeepResearchUsed'] = $this->deepResearchUsed;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->modelCallQuota) {
            $res['ModelCallQuota'] = $this->modelCallQuota;
        }

        if (null !== $this->modelCallUsed) {
            $res['ModelCallUsed'] = $this->modelCallUsed;
        }

        if (null !== $this->orderInstanceId) {
            $res['OrderInstanceId'] = $this->orderInstanceId;
        }

        if (null !== $this->serviceNum) {
            $res['ServiceNum'] = $this->serviceNum;
        }

        if (null !== $this->skillPlanCallQuota) {
            $res['SkillPlanCallQuota'] = $this->skillPlanCallQuota;
        }

        if (null !== $this->skillPlanCallUsed) {
            $res['SkillPlanCallUsed'] = $this->skillPlanCallUsed;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AgentService'])) {
            $model->agentService = $map['AgentService'];
        }

        if (isset($map['DeepResearchQuota'])) {
            $model->deepResearchQuota = $map['DeepResearchQuota'];
        }

        if (isset($map['DeepResearchUsed'])) {
            $model->deepResearchUsed = $map['DeepResearchUsed'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ModelCallQuota'])) {
            $model->modelCallQuota = $map['ModelCallQuota'];
        }

        if (isset($map['ModelCallUsed'])) {
            $model->modelCallUsed = $map['ModelCallUsed'];
        }

        if (isset($map['OrderInstanceId'])) {
            $model->orderInstanceId = $map['OrderInstanceId'];
        }

        if (isset($map['ServiceNum'])) {
            $model->serviceNum = $map['ServiceNum'];
        }

        if (isset($map['SkillPlanCallQuota'])) {
            $model->skillPlanCallQuota = $map['SkillPlanCallQuota'];
        }

        if (isset($map['SkillPlanCallUsed'])) {
            $model->skillPlanCallUsed = $map['SkillPlanCallUsed'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
