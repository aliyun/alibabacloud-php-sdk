<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysResponseBody\customerGateways;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysResponseBody\customerGateways\customerGateway\tags;
use AlibabaCloud\Tea\Model;

class customerGateway extends Model
{
    /**
     * @description The autonomous system number (ASN) of the gateway device in the data center.
     *
     * @example 65530
     *
     * @var int
     */
    public $asn;

    /**
     * @description The authentication key that is used to connect to the gateway device in the data center by using Border Gateway Protocol (BGP).
     *
     * @example AuthKey****
     *
     * @var string
     */
    public $authKey;

    /**
     * @description The time when the customer gateway was created. Unit: millisecond.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1492747187000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The customer gateway ID.
     *
     * @example cgw-bp1pvpl9r9adju6l5****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description The description of the customer gateway.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The IP address of the gateway device in the data center.
     *
     * @example 139.32.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The name of the customer gateway.
     *
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group to which the customer gateway belongs.
     *
     * You can call the [ListResourceGroups](https://help.aliyun.com/document_detail/158855.html) operation to query resource groups.
     * @example rg-acfmzs372yg****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags that are added to the customer gateway.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'asn'               => 'Asn',
        'authKey'           => 'AuthKey',
        'createTime'        => 'CreateTime',
        'customerGatewayId' => 'CustomerGatewayId',
        'description'       => 'Description',
        'ipAddress'         => 'IpAddress',
        'name'              => 'Name',
        'resourceGroupId'   => 'ResourceGroupId',
        'tags'              => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asn) {
            $res['Asn'] = $this->asn;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asn'])) {
            $model->asn = $map['Asn'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
