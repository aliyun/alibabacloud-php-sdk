<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceAttributeRequest;

use AlibabaCloud\Tea\Model;

class toConnectVpcIpBlock extends Model
{
    /**
     * @description The CIDR block of the VSwitch.
     *
     * @example 172.16.0.0/16
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description Specifies whether the CIDR block is a custom CIDR block.
     *
     * @example false
     *
     * @var bool
     */
    public $customized;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-wz94cqvaoe1ipxxxxxx
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cidrBlock'  => 'CidrBlock',
        'customized' => 'Customized',
        'vswitchId'  => 'VswitchId',
        'zoneId'     => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->customized) {
            $res['Customized'] = $this->customized;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return toConnectVpcIpBlock
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Customized'])) {
            $model->customized = $map['Customized'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
