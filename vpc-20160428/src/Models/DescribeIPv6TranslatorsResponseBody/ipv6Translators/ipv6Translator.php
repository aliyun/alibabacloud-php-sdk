<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponseBody\ipv6Translators;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponseBody\ipv6Translators\ipv6Translator\ipv6TranslatorEntryIds;
use AlibabaCloud\Tea\Model;

class ipv6Translator extends Model
{
    /**
     * @description The IPv4 address allocated to the IPv6 Translation Service instance.
     *
     * @example 47.99.XX.XX
     *
     * @var string
     */
    public $allocateIpv4Addr;

    /**
     * @description The IPv6 address allocated to the IPv6 Translation Service instance.
     *
     * @example 2400:3200:1600::XXXX
     *
     * @var string
     */
    public $allocateIpv6Addr;

    /**
     * @description The bandwidth of the IPv6 Translation Service instance.
     *
     * @example 1
     *
     * @var string
     */
    public $availableBandwidth;

    /**
     * @description The bandwidth of the IPv6 Translation Service instance. Unit: Mbit/s.
     *
     * @example 1
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The business status of the IPv6 Translation Service instance. Valid values:
     *
     *   **Normal**
     *   **FinancialLocked**
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The timestamp when the IPv6 Translation Service instance was created.
     *
     * @example 1537151540000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the IPv6 Translation Service instance.
     *
     * @example descriptionforinstance
     *
     * @var string
     */
    public $description;

    /**
     * @description The timestamp when IPv6 Translation Service instance expires.
     *
     * @example 1539792000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The IDs of IPv6 mapping entries of the IPv6 Translation Service instance.
     *
     * @var ipv6TranslatorEntryIds
     */
    public $ipv6TranslatorEntryIds;

    /**
     * @description The ID of the IPv6 Translation Service instance.
     *
     * @example ipv6trans-bp1858ys*****
     *
     * @var string
     */
    public $ipv6TranslatorId;

    /**
     * @description The name of the IPv6 Translation Service instance.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The billing method of the IPv6 Translation Service instance.
     *
     *   **Prepay**: subscription
     *   **Postpay**: pay-as-you-go
     *
     * @example Prepay
     *
     * @var string
     */
    public $payType;

    /**
     * @description The region of the IPv6 Translation Service instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The specification of the IPv6 Translation Service instance.
     *
     * @example small
     *
     * @var string
     */
    public $spec;

    /**
     * @description The status of the IPv6 Translation Service instance.
     *
     * @example active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'allocateIpv4Addr'       => 'AllocateIpv4Addr',
        'allocateIpv6Addr'       => 'AllocateIpv6Addr',
        'availableBandwidth'     => 'AvailableBandwidth',
        'bandwidth'              => 'Bandwidth',
        'businessStatus'         => 'BusinessStatus',
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'endTime'                => 'EndTime',
        'ipv6TranslatorEntryIds' => 'Ipv6TranslatorEntryIds',
        'ipv6TranslatorId'       => 'Ipv6TranslatorId',
        'name'                   => 'Name',
        'payType'                => 'PayType',
        'regionId'               => 'RegionId',
        'spec'                   => 'Spec',
        'status'                 => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocateIpv4Addr) {
            $res['AllocateIpv4Addr'] = $this->allocateIpv4Addr;
        }
        if (null !== $this->allocateIpv6Addr) {
            $res['AllocateIpv6Addr'] = $this->allocateIpv6Addr;
        }
        if (null !== $this->availableBandwidth) {
            $res['AvailableBandwidth'] = $this->availableBandwidth;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ipv6TranslatorEntryIds) {
            $res['Ipv6TranslatorEntryIds'] = null !== $this->ipv6TranslatorEntryIds ? $this->ipv6TranslatorEntryIds->toMap() : null;
        }
        if (null !== $this->ipv6TranslatorId) {
            $res['Ipv6TranslatorId'] = $this->ipv6TranslatorId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6Translator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocateIpv4Addr'])) {
            $model->allocateIpv4Addr = $map['AllocateIpv4Addr'];
        }
        if (isset($map['AllocateIpv6Addr'])) {
            $model->allocateIpv6Addr = $map['AllocateIpv6Addr'];
        }
        if (isset($map['AvailableBandwidth'])) {
            $model->availableBandwidth = $map['AvailableBandwidth'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Ipv6TranslatorEntryIds'])) {
            $model->ipv6TranslatorEntryIds = ipv6TranslatorEntryIds::fromMap($map['Ipv6TranslatorEntryIds']);
        }
        if (isset($map['Ipv6TranslatorId'])) {
            $model->ipv6TranslatorId = $map['Ipv6TranslatorId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
