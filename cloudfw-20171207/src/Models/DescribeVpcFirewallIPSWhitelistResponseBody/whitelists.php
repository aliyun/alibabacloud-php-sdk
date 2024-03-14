<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallIPSWhitelistResponseBody;

use AlibabaCloud\Tea\Model;

class whitelists extends Model
{
    /**
     * @description The type of the list. Valid values:
     *
     *   **1**: user-defined
     *   **2**: address book
     *
     * @example 1
     *
     * @var int
     */
    public $listType;

    /**
     * @description The entries in the list.
     *
     * @example 10.10.200.4/32,10.10.200.25/32
     *
     * @var string
     */
    public $listValue;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * @example vfw-57431e9abe424852a578
     *
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @description An array of entries in the list.
     *
     * @var string[]
     */
    public $whiteListValue;

    /**
     * @description The type of the whitelist. Valid values:
     *
     *   **1**: destination
     *   **2**: source
     *
     * @example 1
     *
     * @var int
     */
    public $whiteType;
    protected $_name = [
        'listType'       => 'ListType',
        'listValue'      => 'ListValue',
        'vpcFirewallId'  => 'VpcFirewallId',
        'whiteListValue' => 'WhiteListValue',
        'whiteType'      => 'WhiteType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
        }
        if (null !== $this->listValue) {
            $res['ListValue'] = $this->listValue;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }
        if (null !== $this->whiteListValue) {
            $res['WhiteListValue'] = $this->whiteListValue;
        }
        if (null !== $this->whiteType) {
            $res['WhiteType'] = $this->whiteType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return whitelists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }
        if (isset($map['ListValue'])) {
            $model->listValue = $map['ListValue'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }
        if (isset($map['WhiteListValue'])) {
            if (!empty($map['WhiteListValue'])) {
                $model->whiteListValue = $map['WhiteListValue'];
            }
        }
        if (isset($map['WhiteType'])) {
            $model->whiteType = $map['WhiteType'];
        }

        return $model;
    }
}
