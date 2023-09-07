<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAutoRenewAttributeResponseBody\items;

use AlibabaCloud\Tea\Model;

class autoRenewAttribute extends Model
{
    /**
     * @description Indicates whether the auto-renewal feature is enabled. Valid values:
     *
     *   true: enabled
     *   false: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenewEnabled;

    /**
     * @description The ID of the cluster.
     *
     * @example pc-*****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The renewal duration.
     *
     * @example 4
     *
     * @var int
     */
    public $duration;

    /**
     * @description The unit of the duration. Valid values:
     *
     *   Year
     *   Month
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The renewal status. Valid values:
     *
     *   AutoRenewal: The cluster is automatically renewed.
     *   Normal: The cluster is manually renewed. The system sends a text message to remind you before the cluster expires.
     *   NotRenewal: The cluster is not renewed. The system does not send a reminder for expiration but only sends a text message three days before the cluster expires to remind you that the cluster is not renewed.
     *
     * @example AutoRenewal
     *
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'autoRenewEnabled' => 'AutoRenewEnabled',
        'DBClusterId'      => 'DBClusterId',
        'duration'         => 'Duration',
        'periodUnit'       => 'PeriodUnit',
        'regionId'         => 'RegionId',
        'renewalStatus'    => 'RenewalStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewEnabled) {
            $res['AutoRenewEnabled'] = $this->autoRenewEnabled;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoRenewAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewEnabled'])) {
            $model->autoRenewEnabled = $map['AutoRenewEnabled'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }

        return $model;
    }
}
