<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetAuditSecurityIpRequest extends Model
{
    /**
     * @description The IP addresses to be added to a review security group. You can add a maximum of 100 IP addresses to each review security group. Separate multiple IP addresses with commas (,). You can enter individual IP addresses or a CIDR block.
     *
     *   Individual IP address: for example, 10.23.12.24
     *   CIDR block: for example, 10.23.12.24/24, where /24 indicates that the prefix of the CIDR block is 24 bits in length. You can replace 24 with a value that ranges from `1 to 32`.
     *
     * @example 192.168.0.1
     *
     * @var string
     */
    public $ips;

    /**
     * @description The operation type. Valid values:
     *
     *   **Append**: adds the IP addresses to the original whitelist. This is the default value.
     *   **Cover**: overwrites the original whitelist.
     *   **Delete**: removes the IP addresses from the original whitelist.
     *
     * @example Cover
     *
     * @var string
     */
    public $operateMode;

    /**
     * @description The name of the review security group. Default value: **Default**. You can specify a maximum of 10 review security groups.
     *
     * @example Default
     *
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'ips'               => 'Ips',
        'operateMode'       => 'OperateMode',
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }
        if (null !== $this->operateMode) {
            $res['OperateMode'] = $this->operateMode;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAuditSecurityIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ips'])) {
            $model->ips = $map['Ips'];
        }
        if (isset($map['OperateMode'])) {
            $model->operateMode = $map['OperateMode'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        return $model;
    }
}
