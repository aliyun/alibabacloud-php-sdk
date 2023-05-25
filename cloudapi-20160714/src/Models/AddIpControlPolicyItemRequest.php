<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class AddIpControlPolicyItemRequest extends Model
{
    /**
     * @description The ID of the policy. The ID is unique.
     *
     * @example 1111111
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the request.
     *
     * @example 113.125.1.101;101.11.1.1
     *
     * @var string
     */
    public $cidrIp;

    /**
     * @description The IP addresses or CIDR blocks involved in the policy. Separate multiple IP addresses or CIDR blocks with semicolons (;). You can specify a maximum of 10 IP addresses or CIDR blocks.
     *
     * @example 7ea91319a34d48a09b5c9c871d9768b1
     *
     * @var string
     */
    public $ipControlId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'appId'         => 'AppId',
        'cidrIp'        => 'CidrIp',
        'ipControlId'   => 'IpControlId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddIpControlPolicyItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
