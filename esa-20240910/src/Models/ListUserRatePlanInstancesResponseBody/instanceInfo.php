<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesResponseBody\instanceInfo\sites;
use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @description The billing method. Valid values:
     *
     *   PREPAY: subscription.
     *   POSTPAY: pay-as-you-go.
     *
     * @example PREPAY
     *
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
     * @description The service locations for the websites that can be associated with the plan. Multiple values are separated by commas (,). Valid values:
     *
     *   domestic: the Chinese mainland.
     *   overseas: outside the Chinese mainland.
     *   global: global.
     *
     * @example domestic,overseas
     *
     * @var string
     */
    public $coverages;

    /**
     * @description The time when the plan was purchased.
     *
     * @example YYYY-MM-DDThh:mm:ssZ
     *
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
     * @description The subscription duration of the plan. Unit: month.
     *
     * @example 3
     *
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
     * @description The time when the plan expires.
     *
     * @example YYYY-MM-DDThh:mm:ssZ
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The plan ID.
     *
     * @example sp-xcdn-96wblslz****
     *
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
     * @description The plan name.
     *
     * @example basic
     *
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $planTraffic;

    /**
     * @description The plan type. Valid values:
     *
     *   normal
     *   enterprise
     *
     * @example normal
     *
     * @var string
     */
    public $planType;

    /**
     * @description The maximum number of websites that can be associated with the plan.
     *
     * @example 1
     *
     * @var string
     */
    public $siteQuota;

    /**
     * @description The websites that have been associated with the plan.
     *
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
     * @description The plan status. Valid values:
     *
     *   online: The plan is in service.
     *   offline: The plan has expired within an allowable period. In this state, the plan is unavailable.
     *   disable: The plan is released.
     *
     * @example online
     *
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

    public function validate() {}

    public function toMap()
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
            $res['Sites'] = [];
            if (null !== $this->sites && \is_array($this->sites)) {
                $n = 0;
                foreach ($this->sites as $item) {
                    $res['Sites'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return instanceInfo
     */
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
                $n = 0;
                foreach ($map['Sites'] as $item) {
                    $model->sites[$n++] = null !== $item ? sites::fromMap($item) : $item;
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
