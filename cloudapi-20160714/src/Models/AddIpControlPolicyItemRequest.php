<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class AddIpControlPolicyItemRequest extends Model
{
    /**
     * @description The restriction policy on app IDs for a specific policy. You can restrict app IDs only for whitelists. The IpControlType values of whitelists are ALLOW.
     *
     *   You can add only one app ID restriction policy at a time.
     *   If this parameter is empty, no restriction is imposed on the app IDs.
     *   If this parameter is not empty, there is restriction not only on IP addresses, but also on apps.
     *   Please note that if this parameter is not empty and the security authentication method of the API is No Authentication, all API calls are restricted.
     *   If this parameter is not empty for a blacklist, API Gateway automatically skips this parameter and sets only restriction on IP addresses. The IpControlType value of a blacklist is REFUSE.
     *
     * @example 1111111
     *
     * @var string
     */
    public $appId;

    /**
     * @description The IP addresses or CIDR blocks involved in the policy. Separate multiple IP addresses or CIDR blocks with semicolons (;). You can specify a maximum of 10 IP addresses or CIDR blocks.
     *
     * This parameter is required.
     * @example 113.125.1.101;101.11.1.1
     *
     * @var string
     */
    public $cidrIp;

    /**
     * @description The ID of the ACL. The ID is unique.
     *
     * This parameter is required.
     * @example 7ea91319a34d48a09b5c9c871d9768b1
     *
     * @var string
     */
    public $ipControlId;

    /**
     * @description The security token included in the WebSocket request header. The system uses this token to authenticate the request.
     *
     * @example 4223a10e-eed3-46a6-8b7c-23003f488153
     *
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
