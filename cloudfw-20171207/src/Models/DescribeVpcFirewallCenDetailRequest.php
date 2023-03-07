<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallCenDetailRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Valid values:
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
     * @description The ID of the VPC for which the VPC firewall is created.
     *
     * @example vpc-2zefk9fbn8j7v585g****
     *
     * @var string
     */
    public $networkInstanceId;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * > You can call the [DescribeVpcFirewallCenList](~~345777~~) operation to query the instance IDs of VPC firewalls.
     * @example vfw-m5e7dbc4y****
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'lang'              => 'Lang',
        'networkInstanceId' => 'NetworkInstanceId',
        'vpcFirewallId'     => 'VpcFirewallId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallCenDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
