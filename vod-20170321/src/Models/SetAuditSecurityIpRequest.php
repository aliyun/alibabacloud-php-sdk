<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetAuditSecurityIpRequest extends Model
{
    /**
     * @description The IP addresses that you want to add to the review security group. You can add a maximum of 100 IP addresses to a review security group. Separate multiple IP addresses with commas (,). You can add IP addresses in the following formats to review security groups:
     *
     *   IP address: 192.168.0.1
     *   CIDR block: 192.168.0.1/24. /24 indicates that the prefix of the CIDR block is 24 bits in length. You can replace 24 with a value that ranges `from 1 to 32`.
     *
     * This parameter is required.
     * @example 192.168.0.1
     *
     * @var string
     */
    public $ips;

    /**
     * @description The operation type. Valid values:
     *
     *   **Append** (default): adds the IP addresses to the original whitelist.
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
