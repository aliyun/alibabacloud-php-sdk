<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesResponseBody\instanceInfo\sites;
use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @example PREPAY
     *
     * @var string
     */
    public $billingMode;

    /**
     * @example domestic,overseas
     *
     * @var string
     */
    public $coverages;

    /**
     * @example YYYY-MM-DDThh:mm:ssZ
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 3
     *
     * @var int
     */
    public $duration;

    /**
     * @example YYYY-MM-DDThh:mm:ssZ
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example sp-xcdn-96wblslz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example basic
     *
     * @var string
     */
    public $planName;

    /**
     * @example normal
     *
     * @var string
     */
    public $planType;

    /**
     * @example 1
     *
     * @var string
     */
    public $siteQuota;

    /**
     * @var sites[]
     */
    public $sites;

    /**
     * @example online
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'billingMode' => 'BillingMode',
        'coverages'   => 'Coverages',
        'createTime'  => 'CreateTime',
        'duration'    => 'Duration',
        'expireTime'  => 'ExpireTime',
        'instanceId'  => 'InstanceId',
        'planName'    => 'PlanName',
        'planType'    => 'PlanType',
        'siteQuota'   => 'SiteQuota',
        'sites'       => 'Sites',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingMode) {
            $res['BillingMode'] = $this->billingMode;
        }
        if (null !== $this->coverages) {
            $res['Coverages'] = $this->coverages;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Coverages'])) {
            $model->coverages = $map['Coverages'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
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
                $n            = 0;
                foreach ($map['Sites'] as $item) {
                    $model->sites[$n++] = null !== $item ? sites::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
