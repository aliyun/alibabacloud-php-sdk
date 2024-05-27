<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @description The expiration time of the WAF instance. This value is a UNIX timestamp. Unit: seconds.
     *
     * >  If the value of **PayType** is **0**, this parameter is not returned. The value 0 indicates that no WAF instances are purchased.
     * @example 1512921600
     *
     * @var int
     */
    public $endDate;

    /**
     * @description Indicates whether the WAF instance has overdue payments. Valid values:
     *
     *   **0**: The instance has overdue payments.
     *   **1**: The instance does not have overdue payments.
     *
     * >  If the value of **PayType** is **0**, this parameter is not returned. The value 0 indicates that no WAF instances are purchased.
     * @example 1
     *
     * @var int
     */
    public $inDebt;

    /**
     * @description The ID of the WAF instance.
     *
     * >  If the value of **PayType** is **0**, this parameter is not returned. The value 0 indicates that no WAF instances are purchased.
     * @example waf-cn-tl32ast****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The activation status of WAF. Valid values:
     *
     *   **0**: No WAF instances are purchased within the Alibaba Cloud account.
     *   **1**: A subscription WAF instance is purchased within the Alibaba Cloud account.
     *
     * @example 1
     *
     * @var int
     */
    public $payType;

    /**
     * @description The region in which the WAF instance resides. Valid values:
     *
     *   **cn**: a region in the Chinese mainland
     *   **cn-hongkong**: a region outside the Chinese mainland
     *
     * >  If the value of **PayType** is **0**, this parameter is not returned. The value 0 indicates that no WAF instances are purchased.
     * @example cn
     *
     * @var string
     */
    public $region;

    /**
     * @description The number of remaining days before the trial period of the WAF instance ends.
     *
     * >  This parameter is returned only if the value of **Trial** is **1**. The value 1 indicates that the free trial of a WAF instance is activated.
     * @example 1
     *
     * @var int
     */
    public $remainDay;

    /**
     * @description Indicates whether the WAF instance expires. Valid values:
     *
     *   **0**: The instance expires.
     *   **1**: The instance does not expire.
     *
     * >  If the value of **PayType** is **0**, this parameter is not returned. The value 0 indicates that no WAF instances are purchased.
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The billing method of the WAF instance: The value is fixed as **Subscription**.
     *
     * >  If the value of **PayType** is **0**, this parameter is not returned. The value 0 indicates that no WAF instances are purchased.
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @description Indicates whether a WAF instance of the free trial edition is activated within the Alibaba Cloud account. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * >  This parameter is returned only if a WAF instance of the free trial edition is activated within the Alibaba Cloud account.
     * @example 1
     *
     * @var int
     */
    public $trial;

    /**
     * @description The edition of the WAF instance. Valid values:
     *
     *   **version_pro_china**: a WAF Pro instance in the Chinese mainland
     *   **version_business_china**: a WAF Business instance in the Chinese mainland
     *   **version_enterprise_china**: a WAF Enterprise instance in the Chinese mainland
     *   **version_exclusive_china**: a WAF Exclusive instance in the Chinese mainland
     *   **version_hybrid_cloud_standard_china**: a Hybrid Cloud WAF instance in the Chinese mainland
     *   **version_pro_china**: a WAF Pro instance outside the Chinese mainland
     *   **version_business**: a WAF Business instance outside the Chinese mainland
     *   **version_enterprise**: a WAF Enterprise instance outside the Chinese mainland
     *   **version_exclusive**: a WAF Exclusive instance outside the Chinese mainland
     *   **version_hybrid_cloud_standard**: a Hybrid Cloud WAF instance outside the Chinese mainland
     *
     * The preceding list contains all the editions of WAF instances within accounts that are created at the International site. If the returned version is not in the list, check whether your account is created at the International site.
     *
     * >  If the value of **PayType** is **0**, this parameter is not returned. The value 0 indicates that no WAF instances are purchased.
     * @example version_3
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'endDate'          => 'EndDate',
        'inDebt'           => 'InDebt',
        'instanceId'       => 'InstanceId',
        'payType'          => 'PayType',
        'region'           => 'Region',
        'remainDay'        => 'RemainDay',
        'status'           => 'Status',
        'subscriptionType' => 'SubscriptionType',
        'trial'            => 'Trial',
        'version'          => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->inDebt) {
            $res['InDebt'] = $this->inDebt;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->remainDay) {
            $res['RemainDay'] = $this->remainDay;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->trial) {
            $res['Trial'] = $this->trial;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['InDebt'])) {
            $model->inDebt = $map['InDebt'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RemainDay'])) {
            $model->remainDay = $map['RemainDay'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Trial'])) {
            $model->trial = $map['Trial'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
