<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class CreateIpamPoolAllocationRequest extends Model
{
    /**
     * @description Enter a CIDR block to reserve a custom CIDR block.
     *
     **Usage notes** Specify at least one of **Cidr** and **CidrMask** .
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description Enter a mask to reserve a custom CIDR block.
     *
     **Usage notes** Specify at least one of **Cidr** and **CidrMask** .
     *
     * @example 24
     *
     * @var int
     */
    public $cidrMask;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     **Usage notes** If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the DryRunOperation error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The description of the allocation.
     *
     * @example test description
     *
     * @var string
     */
    public $ipamPoolAllocationDescription;

    /**
     * @description The name of the allocation.
     *
     * @example test name
     *
     * @var string
     */
    public $ipamPoolAllocationName;

    /**
     * @description The ID of the IPAM pool.
     *
     * This parameter is required.
     *
     * @example ipam-pool-6rcq3tobayc20t****
     *
     * @var string
     */
    public $ipamPoolId;

    /**
     * @description The region ID of the custom CIDR block that you want to reserve.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cidr' => 'Cidr',
        'cidrMask' => 'CidrMask',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ipamPoolAllocationDescription' => 'IpamPoolAllocationDescription',
        'ipamPoolAllocationName' => 'IpamPoolAllocationName',
        'ipamPoolId' => 'IpamPoolId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->cidrMask) {
            $res['CidrMask'] = $this->cidrMask;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ipamPoolAllocationDescription) {
            $res['IpamPoolAllocationDescription'] = $this->ipamPoolAllocationDescription;
        }
        if (null !== $this->ipamPoolAllocationName) {
            $res['IpamPoolAllocationName'] = $this->ipamPoolAllocationName;
        }
        if (null !== $this->ipamPoolId) {
            $res['IpamPoolId'] = $this->ipamPoolId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpamPoolAllocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['CidrMask'])) {
            $model->cidrMask = $map['CidrMask'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IpamPoolAllocationDescription'])) {
            $model->ipamPoolAllocationDescription = $map['IpamPoolAllocationDescription'];
        }
        if (isset($map['IpamPoolAllocationName'])) {
            $model->ipamPoolAllocationName = $map['IpamPoolAllocationName'];
        }
        if (isset($map['IpamPoolId'])) {
            $model->ipamPoolId = $map['IpamPoolId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
