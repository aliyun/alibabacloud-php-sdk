<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAutoRenewAttributeResponseBody\items;

use AlibabaCloud\Tea\Model;

class autoRenewAttribute extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled for the cluster. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenewEnabled;

    /**
     * @description The cluster ID.
     *
     * @example am-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The renewal duration.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The unit of the renewal duration. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * @example Year
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The renewal status of the cluster. Valid values:
     *
     *   **AutoRenewal**: The cluster is automatically renewed.
     *   **Normal**: The cluster is manually renewed. Before the cluster expires, the system sends you a reminder by SMS message.
     *   **NotRenewal**: The cluster is not renewed. Three days before the cluster expires, the system sends you a reminder by SMS message to remind you that the cluster is not renewed. However, the system does not send you a reminder when the cluster expires.
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
