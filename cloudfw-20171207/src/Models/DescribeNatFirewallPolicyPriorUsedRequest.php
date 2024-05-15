<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeNatFirewallPolicyPriorUsedRequest extends Model
{
    /**
     * @description The direction of the traffic to which the access control policy applies.
     *
     * Valid values:
     *
     *   **out**: outbound traffic
     *
     * This parameter is required.
     * @example out
     *
     * @var string
     */
    public $direction;

    /**
     * @description The IP version supported by the access control policy. Valid values:
     *
     *   **4**: IPv4 (default)
     *
     * @example 4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The language of the content within the request and the response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the NAT gateway.
     *
     * This parameter is required.
     * @example ngw-xxxxxx
     *
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'direction'    => 'Direction',
        'ipVersion'    => 'IpVersion',
        'lang'         => 'Lang',
        'natGatewayId' => 'NatGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNatFirewallPolicyPriorUsedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        return $model;
    }
}
