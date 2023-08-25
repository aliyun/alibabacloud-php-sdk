<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesResponseBody;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesResponseBody\anycastList\anycastEipBindInfoList;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesResponseBody\anycastList\tags;
use AlibabaCloud\Tea\Model;

class anycastList extends Model
{
    /**
     * @description The ID of the account to which the Anycast EIP belongs.
     *
     * @example 123440159596****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The list of cloud resources with which the Anycast EIPs are associated.
     *
     * @var anycastEipBindInfoList[]
     */
    public $anycastEipBindInfoList;

    /**
     * @description The ID of the Anycast EIP.
     *
     * @example aeip-2zeerraiwb7ujsxdc****
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
     * @description The time when the Anycast EIP was created.
     *
     * @example 2022-04-22T01:37:38Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the Anycast EIP.
     *
     * @example docdesc
     *
     * @var string
     */
    public $description;

    /**
     * @description The billing method of the Anycast EIP.
     *
     **PostPaid**: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the Anycast EIP.
     *
     **PayByTraffic**: pay-by-data-transfer
     *
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
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The access area of the Anycast EIP.
     *
     **international**: regions outside the Chinese mainland
     *
     * @example international
     *
     * @var string
     */
    public $serviceLocation;

    /**
     * @description Indicates whether the resource is created by the service account.
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $serviceManaged;

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
     * @example Associating
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
        'businessStatus'         => 'BusinessStatus',
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'instanceChargeType'     => 'InstanceChargeType',
        'internetChargeType'     => 'InternetChargeType',
        'ipAddress'              => 'IpAddress',
        'name'                   => 'Name',
        'resourceGroupId'        => 'ResourceGroupId',
        'serviceLocation'        => 'ServiceLocation',
        'serviceManaged'         => 'ServiceManaged',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
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
     * @return anycastList
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
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
