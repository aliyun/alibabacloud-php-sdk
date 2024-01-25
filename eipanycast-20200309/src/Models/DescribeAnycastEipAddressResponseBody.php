<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressResponseBody\anycastEipBindInfoList;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeAnycastEipAddressResponseBody extends Model
{
    /**
     * @description The ID of the account to which the Anycast EIP belongs.
     *
     * @example 25346073170691****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The information about the endpoint with which the Anycast EIP is associated.
     *
     * @var anycastEipBindInfoList[]
     */
    public $anycastEipBindInfoList;

    /**
     * @description The ID of the Anycast EIP.
     *
     * @example aeip-bp1ix34fralt4ykf3****
     *
     * @var string
     */
    public $anycastId;

    /**
     * @description The maximum bandwidth of the Anycast EIP. Unit: Mbit/s.
     *
     * @example 200
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The BID of the account to which the Anycast EIP belongs.
     *
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @description The service status of the Anycast EIP. Valid values:
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
     * @description The point in time at which the Anycast EIP was created.
     *
     * The time follows the ISO8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     * @example 2021-04-23T01:37:38Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the Anycast EIP.
     *
     * @example doctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The billing method of the Anycast EIP.
     *
     * Only **PostPaid** may be returned, which indicates the pay-as-you-go billing method.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the Anycast EIP.
     *
     * Only **PayByTraffic** may be returned, which indicates the pay-by-data-transfer metering method.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The IP address of the Anycast EIP.
     *
     * @example 139.95.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The name of the Anycast EIP.
     *
     * @example docname
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-acfmzssisocarfy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The access area of the Anycast EIP.
     *
     * Only **international** may be returned, which indicates the areas outside the Chinese mainland.
     * @example international
     *
     * @var string
     */
    public $serviceLocation;

    /**
     * @description The status of the Anycast EIP.
     *
     *   **Associating**
     *   **Unassociating**
     *   **Allocated**
     *   **Associated**
     *   **Modifying**
     *   **Releasing**
     *   **Released**
     *
     * @example Associated
     *
     * @var string
     */
    public $status;

    /**
     * @description The information about the tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'aliUid'                 => 'AliUid',
        'anycastEipBindInfoList' => 'AnycastEipBindInfoList',
        'anycastId'              => 'AnycastId',
        'bandwidth'              => 'Bandwidth',
        'bid'                    => 'Bid',
        'businessStatus'         => 'BusinessStatus',
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'instanceChargeType'     => 'InstanceChargeType',
        'internetChargeType'     => 'InternetChargeType',
        'ipAddress'              => 'IpAddress',
        'name'                   => 'Name',
        'requestId'              => 'RequestId',
        'resourceGroupId'        => 'ResourceGroupId',
        'serviceLocation'        => 'ServiceLocation',
        'status'                 => 'Status',
        'tags'                   => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->anycastEipBindInfoList) {
            $res['AnycastEipBindInfoList'] = [];
            if (null !== $this->anycastEipBindInfoList && \is_array($this->anycastEipBindInfoList)) {
                $n = 0;
                foreach ($this->anycastEipBindInfoList as $item) {
                    $res['AnycastEipBindInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
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
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAnycastEipAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AnycastEipBindInfoList'])) {
            if (!empty($map['AnycastEipBindInfoList'])) {
                $model->anycastEipBindInfoList = [];
                $n                             = 0;
                foreach ($map['AnycastEipBindInfoList'] as $item) {
                    $model->anycastEipBindInfoList[$n++] = null !== $item ? anycastEipBindInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
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
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
