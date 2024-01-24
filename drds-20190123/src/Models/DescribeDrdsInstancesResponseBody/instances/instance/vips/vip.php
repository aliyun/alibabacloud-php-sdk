<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesResponseBody\instances\instance\vips;

use AlibabaCloud\Tea\Model;

class vip extends Model
{
    /**
     * @description The virtual IP address.
     *
     * @example 10.23.***.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ports that are opened on the VIP.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The type of the VIP. Valid values:
     *
     *   intranet: a private IP address
     *   internet: a public IP address
     *
     * @example intranet
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bpxxxxxxxxxxxy
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bpxxxxxxxxxxxxx96
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The domain name that is mapped to the VIP.
     *
     * @example drdssen1243as.drds.aliyuncs.com
     *
     * @var string
     */
    public $dns;
    protected $_name = [
        'IP'        => 'IP',
        'port'      => 'Port',
        'type'      => 'Type',
        'vpcId'     => 'VpcId',
        'vswitchId' => 'VswitchId',
        'dns'       => 'dns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
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
        if (null !== $this->dns) {
            $res['dns'] = $this->dns;
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
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
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
        if (isset($map['dns'])) {
            $model->dns = $map['dns'];
        }

        return $model;
    }
}
