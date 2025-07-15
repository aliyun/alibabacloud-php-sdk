<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class TransformEipSegmentToPublicIpAddressPoolRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among all requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** is different for each request.
     *
     * @example 02fb3da4-130e-11****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the IP address pool.
     *
     * The description must be 0 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example AddressPoolDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the contiguous EIP group to be migrated.
     *
     * This parameter is required.
     *
     * @example eipsg-2zett8ba055tbsxme****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the IP address pool.
     *
     * The name must be 0 to 128 characters in length and cannot start with `http://` or `https://`.
     *
     * @example AddressPoolName
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region to which the contiguous EIP group belongs. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the address pool belongs.
     *
     * @example rg-acfmxazb4pcdvf****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransformEipSegmentToPublicIpAddressPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
