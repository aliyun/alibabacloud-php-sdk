<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesRequest\tags;
use AlibabaCloud\Tea\Model;

class ListAnycastEipAddressesRequest extends Model
{
    /**
     * @description The IP address that is allocated to the Anycast EIP.
     *
     * @example 139.95.XX.XX
     *
     * @var string
     */
    public $anycastEipAddress;

    /**
     * @description The ID of the Anycast EIP.
     *
     * >  To ensure the accuracy of the query result, we do not recommend that you specify **AnycastIds** and **AnycastId** at the same time.
     * @example aeip-2zeerraiwb7ujsxdc****
     *
     * @var string
     */
    public $anycastId;

    /**
     * @description The IDs of Anycast EIPs.
     *
     * You can enter at most 50 Anycast EIP IDs.
     *
     * >  To ensure the accuracy of the query result, we do not recommend that you specify **AnycastIds** and **AnycastId** at the same time.
     * @var string[]
     */
    public $anycastIds;

    /**
     * @description The IDs of the cloud resources with which the Anycast EIPs are associated.
     *
     * You can enter at most 100 cloud resource IDs.
     * @example lb-2zebb08phyczzawe****
     *
     * @var string[]
     */
    public $bindInstanceIds;

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
     * @description The billing method of the Anycast EIP.
     *
     * Set the value to **PostPaid**, which specifies the pay-as-you-go billing method.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the Anycast EIP.
     *
     * Set the value to **PayByTraffic**, which specifies the pay-by-data-transfer metering method.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The number of entries to return on each page. Valid values: **20 to 100**. Default value: **50**.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The name of the Anycast EIP.
     *
     * The name must be 0 to 128 characters in length, and can contain digits, hyphens (-), and underscores (\_). The name must start with a letter.
     * @example doctest
     *
     * @var string
     */
    public $name;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The access area of the Anycast EIP.
     *
     * Set the value to **international**, which specifies the regions outside the Chinese mainland.
     * @example international
     *
     * @var string
     */
    public $serviceLocation;

    /**
     * @description The status of the Anycast EIP. Valid values:
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
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'anycastEipAddress'  => 'AnycastEipAddress',
        'anycastId'          => 'AnycastId',
        'anycastIds'         => 'AnycastIds',
        'bindInstanceIds'    => 'BindInstanceIds',
        'businessStatus'     => 'BusinessStatus',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
        'maxResults'         => 'MaxResults',
        'name'               => 'Name',
        'nextToken'          => 'NextToken',
        'resourceGroupId'    => 'ResourceGroupId',
        'serviceLocation'    => 'ServiceLocation',
        'status'             => 'Status',
        'tags'               => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastEipAddress) {
            $res['AnycastEipAddress'] = $this->anycastEipAddress;
        }
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }
        if (null !== $this->anycastIds) {
            $res['AnycastIds'] = $this->anycastIds;
        }
        if (null !== $this->bindInstanceIds) {
            $res['BindInstanceIds'] = $this->bindInstanceIds;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListAnycastEipAddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastEipAddress'])) {
            $model->anycastEipAddress = $map['AnycastEipAddress'];
        }
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }
        if (isset($map['AnycastIds'])) {
            if (!empty($map['AnycastIds'])) {
                $model->anycastIds = $map['AnycastIds'];
            }
        }
        if (isset($map['BindInstanceIds'])) {
            if (!empty($map['BindInstanceIds'])) {
                $model->bindInstanceIds = $map['BindInstanceIds'];
            }
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
