<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListPostpaidRatePlanInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListPostpaidRatePlanInstancesResponseBody\instanceInfo\sites;

class instanceInfo extends Model
{
    /**
     * @var string
     */
    public $billingMethod;

    /**
     * @var string
     */
    public $billingMode;

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
    public $expectedUpdateTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $planNameCn;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var string
     */
    public $shareType;

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
    public $status;
    protected $_name = [
        'billingMethod' => 'BillingMethod',
        'billingMode' => 'BillingMode',
        'coverages' => 'Coverages',
        'createTime' => 'CreateTime',
        'expectedUpdateTime' => 'ExpectedUpdateTime',
        'instanceId' => 'InstanceId',
        'ownerId' => 'OwnerId',
        'planName' => 'PlanName',
        'planNameCn' => 'PlanNameCn',
        'planType' => 'PlanType',
        'shareType' => 'ShareType',
        'siteQuota' => 'SiteQuota',
        'sites' => 'Sites',
        'status' => 'Status',
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
        if (null !== $this->billingMethod) {
            $res['BillingMethod'] = $this->billingMethod;
        }

        if (null !== $this->billingMode) {
            $res['BillingMode'] = $this->billingMode;
        }

        if (null !== $this->coverages) {
            $res['Coverages'] = $this->coverages;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->expectedUpdateTime) {
            $res['ExpectedUpdateTime'] = $this->expectedUpdateTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }

        if (null !== $this->planNameCn) {
            $res['PlanNameCn'] = $this->planNameCn;
        }

        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }

        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
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
        if (isset($map['BillingMethod'])) {
            $model->billingMethod = $map['BillingMethod'];
        }

        if (isset($map['BillingMode'])) {
            $model->billingMode = $map['BillingMode'];
        }

        if (isset($map['Coverages'])) {
            $model->coverages = $map['Coverages'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExpectedUpdateTime'])) {
            $model->expectedUpdateTime = $map['ExpectedUpdateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        if (isset($map['PlanNameCn'])) {
            $model->planNameCn = $map['PlanNameCn'];
        }

        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }

        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
