<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\ListAccountEcsQuotasResponseBody\ecsQuotas;

use AlibabaCloud\Tea\Model;

class ecsQuota extends Model
{
    /**
     * @var string
     */
    public $applicationStatus;

    /**
     * @var int
     */
    public $baseQuota;

    /**
     * @var int
     */
    public $baseQuotaUsage;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $quotaResourceName;

    /**
     * @var string
     */
    public $quotaResourceType;

    /**
     * @var string
     */
    public $quotaUnit;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $reservedQuota;

    /**
     * @var int
     */
    public $reservedQuotaUsage;

    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var int
     */
    public $totalQuotaUsage;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'applicationStatus'  => 'ApplicationStatus',
        'baseQuota'          => 'BaseQuota',
        'baseQuotaUsage'     => 'BaseQuotaUsage',
        'chargeType'         => 'ChargeType',
        'networkType'        => 'NetworkType',
        'quotaResourceName'  => 'QuotaResourceName',
        'quotaResourceType'  => 'QuotaResourceType',
        'quotaUnit'          => 'QuotaUnit',
        'regionId'           => 'RegionId',
        'reservedQuota'      => 'ReservedQuota',
        'reservedQuotaUsage' => 'ReservedQuotaUsage',
        'totalQuota'         => 'TotalQuota',
        'totalQuotaUsage'    => 'TotalQuotaUsage',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationStatus) {
            $res['ApplicationStatus'] = $this->applicationStatus;
        }
        if (null !== $this->baseQuota) {
            $res['BaseQuota'] = $this->baseQuota;
        }
        if (null !== $this->baseQuotaUsage) {
            $res['BaseQuotaUsage'] = $this->baseQuotaUsage;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->quotaResourceName) {
            $res['QuotaResourceName'] = $this->quotaResourceName;
        }
        if (null !== $this->quotaResourceType) {
            $res['QuotaResourceType'] = $this->quotaResourceType;
        }
        if (null !== $this->quotaUnit) {
            $res['QuotaUnit'] = $this->quotaUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservedQuota) {
            $res['ReservedQuota'] = $this->reservedQuota;
        }
        if (null !== $this->reservedQuotaUsage) {
            $res['ReservedQuotaUsage'] = $this->reservedQuotaUsage;
        }
        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }
        if (null !== $this->totalQuotaUsage) {
            $res['TotalQuotaUsage'] = $this->totalQuotaUsage;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsQuota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationStatus'])) {
            $model->applicationStatus = $map['ApplicationStatus'];
        }
        if (isset($map['BaseQuota'])) {
            $model->baseQuota = $map['BaseQuota'];
        }
        if (isset($map['BaseQuotaUsage'])) {
            $model->baseQuotaUsage = $map['BaseQuotaUsage'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['QuotaResourceName'])) {
            $model->quotaResourceName = $map['QuotaResourceName'];
        }
        if (isset($map['QuotaResourceType'])) {
            $model->quotaResourceType = $map['QuotaResourceType'];
        }
        if (isset($map['QuotaUnit'])) {
            $model->quotaUnit = $map['QuotaUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservedQuota'])) {
            $model->reservedQuota = $map['ReservedQuota'];
        }
        if (isset($map['ReservedQuotaUsage'])) {
            $model->reservedQuotaUsage = $map['ReservedQuotaUsage'];
        }
        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }
        if (isset($map['TotalQuotaUsage'])) {
            $model->totalQuotaUsage = $map['TotalQuotaUsage'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
