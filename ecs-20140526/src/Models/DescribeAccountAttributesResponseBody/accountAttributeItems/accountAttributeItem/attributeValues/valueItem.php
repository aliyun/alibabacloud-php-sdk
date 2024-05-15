<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems\accountAttributeItem\attributeValues;

use AlibabaCloud\Tea\Model;

class valueItem extends Model
{
    /**
     * @description The number of privilege attributes in the account.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description The data disk category. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: enhanced SSD (ESSD)
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The expiration time of a privilege. This parameter is returned only when the account privilege has an expiration time. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-01-01T12:30:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The billing method of the instance.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The type of the instance.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The value of the resource quota in the specified region. Valid values:
     *
     * The values returned for the resource quotas to which the following AttributeName values correspond are 0 or positive integers:
     *
     *   max-security-groups
     *   max-elastic-network-interfaces
     *   max-postpaid-instance-vcpu-count
     *   max-spot-instance-vcpu-count
     *   used-postpaid-instance-vcpu-count
     *   used-spot-instance-vcpu-count
     *   max-postpaid-yundisk-capacity
     *   used-postpaid-yundisk-capacity
     *   max-dedicated-hosts
     *   max-axt-command-count
     *   max-axt-invocation-daily
     *   max-cloud-assistant-activation-count
     *
     * When the AttributeName parameter is set to real-name-authentications, one of the following values is returned:
     *
     *   yes
     *   none
     *   unnecessary
     *
     * When the AttributeName parameter is set to instance-network-type, one of the following values is returned:
     *
     *   vpc
     *   classic
     *
     * @example 800
     *
     * @var string
     */
    public $value;

    /**
     * @description The ID of the zone in which the resource resides.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'count'              => 'Count',
        'diskCategory'       => 'DiskCategory',
        'expiredTime'        => 'ExpiredTime',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceType'       => 'InstanceType',
        'value'              => 'Value',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valueItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
