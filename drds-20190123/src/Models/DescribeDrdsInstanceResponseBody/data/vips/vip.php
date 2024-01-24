<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceResponseBody\data\vips;

use AlibabaCloud\Tea\Model;

class vip extends Model
{
    /**
     * @description The domain name that is mapped to the VIP.
     *
     * @example drdssen1243as.drds.aliyuncs.com
     *
     * @var string
     */
    public $dns;

    /**
     * @description The number of remaining days before the VIP expires.
     *
     * @example 0
     *
     * @var int
     */
    public $expireDays;

    /**
     * @description The ports that are opened on the VIP.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The type of the VIP. Valid values: intranet and internet.
     *
     * @example intranet
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp**********
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp***********
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'dns'        => 'Dns',
        'expireDays' => 'ExpireDays',
        'port'       => 'Port',
        'type'       => 'Type',
        'vpcId'      => 'VpcId',
        'vswitchId'  => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dns) {
            $res['Dns'] = $this->dns;
        }
        if (null !== $this->expireDays) {
            $res['ExpireDays'] = $this->expireDays;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vip
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dns'])) {
            $model->dns = $map['Dns'];
        }
        if (isset($map['ExpireDays'])) {
            $model->expireDays = $map['ExpireDays'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
