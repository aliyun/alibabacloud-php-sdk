<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class GetIpamPoolNextAvailableCidrRequest extends Model
{
    /**
     * @description CIDR to be allocated.
     *
     * >  You must enter at least one of the CidrBlock and CidrMask fields.
     *
     * @example 172.68.0.0/26
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The length of the CIDR mask to be allocated.
     *
     * >  You must enter at least one of the CidrBlock and CidrMask fields.
     *
     * @example 26
     *
     * @var int
     */
    public $cidrMask;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

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
     * @description The region of the IPAM pool.
     *
     * >  If the IPAM pool has the region attribute, this parameter is set to the effective region of the IPAM pool. If not, this is set to the hosted region.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cidrBlock' => 'CidrBlock',
        'cidrMask' => 'CidrMask',
        'clientToken' => 'ClientToken',
        'ipamPoolId' => 'IpamPoolId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->cidrMask) {
            $res['CidrMask'] = $this->cidrMask;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
     * @return GetIpamPoolNextAvailableCidrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CidrMask'])) {
            $model->cidrMask = $map['CidrMask'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
