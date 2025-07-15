<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateCustomerGatewayRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateCustomerGatewayRequest extends Model
{
    /**
     * @description The autonomous system number (ASN) of the gateway device in your data center. This parameter is required If you want to use Border Gateway Protocol (BGP) for the IPsec-VPN connection. Valid values: 1 to 4294967295. 45104 is not supported.
     *
     **Asn** is a 4-byte number. You can enter it in two segments and separate the first 16 bits from the following 16 bits with a period (.). Enter the number in each segment in decimal format.
     *
     * For example, if you enter 123.456, the ASN is 8061384. The ASN is calculated by using the following formula: 123 × 65536 + 456 = 8061384.
     *
     * > - We recommend that you use a private ASN to establish BGP connections to Alibaba Cloud. For information about the range of private ASNs, see the relevant documentation.
     * > - 45104 is a unique identifier assigned by IANA to Alibaba Cloud. It is used to identify Alibaba Cloud during route selection and data transmission over the Internet.
     *
     * @example 65530
     *
     * @var string
     */
    public $asn;

    /**
     * @description The authentication key of the BGP routing protocol for the gateway device in the data center.
     *
     * The key must be 1 to 64 characters in length. It can contain only ASCII characters and cannot contain spaces or question marks (?).
     *
     * @example AuthKey****
     *
     * @var string
     */
    public $authKey;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 02fb3da4-130e-11e9-8e44****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the customer gateway.
     *
     * The description must be 1 to 100 characters in length, and cannot start with `http://` or `https://`.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The static IP address of the gateway device in the data center.
     *
     *   If you want to create a public IPsec-VPN connection, enter a public IP address.
     *   If you want to create a private IPsec-VPN connection, enter a private IP address.
     *
     * You cannot use the following IP addresses. Otherwise, a IPsec-VPN connection cannot be established:
     *
     *   100.64.0.0~100.127.255.255
     *   127.0.0.0~127.255.255.255
     *   169.254.0.0~169.254.255.255
     *   224.0.0.0~239.255.255.255
     *   255.0.0.0~255.255.255.255
     *
     * This parameter is required.
     *
     * @example 101.12.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The name of the customer gateway.
     *
     * The name must be 1 to 100 characters in length, and cannot start with `http://` or `https://`.
     *
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the customer gateway.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the customer gateway belongs.
     *
     * - You can call the [ListResourceGroups](https://help.aliyun.com/document_detail/158855.html) operation to query the resource group list.
     *
     * - If you do not specify a resource group, the customer gateway will belong to the default resource group after being created.
     *
     * @example rg-aek2qo2h4jy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The tag value.
     *
     * The tag value can be an empty string and cannot exceed 128 characters in length. It cannot start with `aliyun` or `acs:`, and cannot contain `http://` or `https://`.
     *
     * Each tag key corresponds to one tag value. You can specify up to 20 tag values in each call.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'asn' => 'Asn',
        'authKey' => 'AuthKey',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'ipAddress' => 'IpAddress',
        'name' => 'Name',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asn) {
            $res['Asn'] = $this->asn;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
     * @return CreateCustomerGatewayRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
