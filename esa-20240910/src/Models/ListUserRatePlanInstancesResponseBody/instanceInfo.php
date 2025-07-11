<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesResponseBody\instanceInfo\sites;

class instanceInfo extends Model
{
    /**
     * @var string
     */
    public $billingMode;

    /**
     * @var string
     */
    public $botInstanceLevel;

    /**
     * @var string
     */
    public $botRequest;

    /**
     * @var string
     */
    public $coverages;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $crossborderTraffic;

    /**
     * @var string
     */
    public $ddosBurstableDomesticProtection;

    /**
     * @var string
     */
    public $ddosBurstableOverseasProtection;

    /**
     * @var string
     */
    public $ddosInstanceLevel;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $edgeRoutineRquest;

    /**
     * @var string
     */
    public $edgeWafRequest;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $layer4Traffic;

    /**
     * @var string
     */
    public $layer4TrafficIntl;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $planTraffic;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var string
     */
    public $siteQuota;

    /**
     * @var sites[]
     */
    public $sites;

    /**
     * @var string
     */
    public $smartRoutingRequest;

    /**
     * @var string
     */
    public $staticRequest;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subscribeType;
    protected $_name = [
        'billingMode' => 'BillingMode',
        'botInstanceLevel' => 'BotInstanceLevel',
        'botRequest' => 'BotRequest',
        'coverages' => 'Coverages',
        'createTime' => 'CreateTime',
        'crossborderTraffic' => 'CrossborderTraffic',
        'ddosBurstableDomesticProtection' => 'DdosBurstableDomesticProtection',
        'ddosBurstableOverseasProtection' => 'DdosBurstableOverseasProtection',
        'ddosInstanceLevel' => 'DdosInstanceLevel',
        'duration' => 'Duration',
        'edgeRoutineRquest' => 'EdgeRoutineRquest',
        'edgeWafRequest' => 'EdgeWafRequest',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'layer4Traffic' => 'Layer4Traffic',
        'layer4TrafficIntl' => 'Layer4TrafficIntl',
        'planName' => 'PlanName',
        'planTraffic' => 'PlanTraffic',
        'planType' => 'PlanType',
        'siteQuota' => 'SiteQuota',
        'sites' => 'Sites',
        'smartRoutingRequest' => 'SmartRoutingRequest',
        'staticRequest' => 'StaticRequest',
        'status' => 'Status',
        'subscribeType' => 'SubscribeType',
    ];

    public function validate()
    {
        if (\is_array($this->sites)) {
            Model::validateArray($this->sites);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingMode) {
            $res['BillingMode'] = $this->billingMode;
        }

        if (null !== $this->botInstanceLevel) {
            $res['BotInstanceLevel'] = $this->botInstanceLevel;
        }

        if (null !== $this->botRequest) {
            $res['BotRequest'] = $this->botRequest;
        }

        if (null !== $this->coverages) {
            $res['Coverages'] = $this->coverages;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->crossborderTraffic) {
            $res['CrossborderTraffic'] = $this->crossborderTraffic;
        }

        if (null !== $this->ddosBurstableDomesticProtection) {
            $res['DdosBurstableDomesticProtection'] = $this->ddosBurstableDomesticProtection;
        }

        if (null !== $this->ddosBurstableOverseasProtection) {
            $res['DdosBurstableOverseasProtection'] = $this->ddosBurstableOverseasProtection;
        }

        if (null !== $this->ddosInstanceLevel) {
            $res['DdosInstanceLevel'] = $this->ddosInstanceLevel;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->edgeRoutineRquest) {
            $res['EdgeRoutineRquest'] = $this->edgeRoutineRquest;
        }

        if (null !== $this->edgeWafRequest) {
            $res['EdgeWafRequest'] = $this->edgeWafRequest;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->layer4Traffic) {
            $res['Layer4Traffic'] = $this->layer4Traffic;
        }

        if (null !== $this->layer4TrafficIntl) {
            $res['Layer4TrafficIntl'] = $this->layer4TrafficIntl;
        }

        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }

        if (null !== $this->planTraffic) {
            $res['PlanTraffic'] = $this->planTraffic;
        }

        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }

        if (null !== $this->siteQuota) {
            $res['SiteQuota'] = $this->siteQuota;
        }

        if (null !== $this->sites) {
            if (\is_array($this->sites)) {
                $res['Sites'] = [];
                $n1 = 0;
                foreach ($this->sites as $item1) {
                    $res['Sites'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->smartRoutingRequest) {
            $res['SmartRoutingRequest'] = $this->smartRoutingRequest;
        }

        if (null !== $this->staticRequest) {
            $res['StaticRequest'] = $this->staticRequest;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subscribeType) {
            $res['SubscribeType'] = $this->subscribeType;
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
        if (isset($map['BillingMode'])) {
            $model->billingMode = $map['BillingMode'];
        }

        if (isset($map['BotInstanceLevel'])) {
            $model->botInstanceLevel = $map['BotInstanceLevel'];
        }

        if (isset($map['BotRequest'])) {
            $model->botRequest = $map['BotRequest'];
        }

        if (isset($map['Coverages'])) {
            $model->coverages = $map['Coverages'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CrossborderTraffic'])) {
            $model->crossborderTraffic = $map['CrossborderTraffic'];
        }

        if (isset($map['DdosBurstableDomesticProtection'])) {
            $model->ddosBurstableDomesticProtection = $map['DdosBurstableDomesticProtection'];
        }

        if (isset($map['DdosBurstableOverseasProtection'])) {
            $model->ddosBurstableOverseasProtection = $map['DdosBurstableOverseasProtection'];
        }

        if (isset($map['DdosInstanceLevel'])) {
            $model->ddosInstanceLevel = $map['DdosInstanceLevel'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EdgeRoutineRquest'])) {
            $model->edgeRoutineRquest = $map['EdgeRoutineRquest'];
        }

        if (isset($map['EdgeWafRequest'])) {
            $model->edgeWafRequest = $map['EdgeWafRequest'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Layer4Traffic'])) {
            $model->layer4Traffic = $map['Layer4Traffic'];
        }

        if (isset($map['Layer4TrafficIntl'])) {
            $model->layer4TrafficIntl = $map['Layer4TrafficIntl'];
        }

        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        if (isset($map['PlanTraffic'])) {
            $model->planTraffic = $map['PlanTraffic'];
        }

        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }

        if (isset($map['SiteQuota'])) {
            $model->siteQuota = $map['SiteQuota'];
        }

        if (isset($map['Sites'])) {
            if (!empty($map['Sites'])) {
                $model->sites = [];
                $n1 = 0;
                foreach ($map['Sites'] as $item1) {
                    $model->sites[$n1] = sites::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SmartRoutingRequest'])) {
            $model->smartRoutingRequest = $map['SmartRoutingRequest'];
        }

        if (isset($map['StaticRequest'])) {
            $model->staticRequest = $map['StaticRequest'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubscribeType'])) {
            $model->subscribeType = $map['SubscribeType'];
        }

        return $model;
    }
}
