<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;

class GetIpamPoolNextAvailableCidrRequest extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;
    /**
     * @var int
     */
    public $cidrMask;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $ipamPoolId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cidrBlock'   => 'CidrBlock',
        'cidrMask'    => 'CidrMask',
        'clientToken' => 'ClientToken',
        'ipamPoolId'  => 'IpamPoolId',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
