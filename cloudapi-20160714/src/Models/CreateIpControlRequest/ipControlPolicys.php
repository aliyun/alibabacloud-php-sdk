<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIpControlRequest;

use AlibabaCloud\Tea\Model;

class ipControlPolicys extends Model
{
    /**
     * @description The ID of the application that is restricted by the policy. You can configure the AppId parameter only when the value of the IpControlType parameter is ALLOW.
     *
     *   You can add only one application ID at a time.
     *   If this parameter is empty, no applications are restricted.
     *   If this parameter is not empty, not only IP addresses but also applications are restricted.
     *   If this parameter is not empty and no security authentication method is specified for the API, all API calls are restricted.
     *   If the value of the IpControlType parameter is REFUSE and the AppId parameter is not empty, API Gateway automatically ignores the AppId parameter and restricts only the IP addresses.
     *   Valid values of N in IpControlPolicys.N: `[1,100]`.
     *
     * @example 11111
     *
     * @var string
     */
    public $appId;

    /**
     * @description The IP address or CIDR block involved in a policy.
     *
     *   If you want to specify a policy when you create an ACL, this parameter is required.
     *   The IP address or CIDR block that is defined in each policy. Separate multiple IP addresses or CIDR blocks with semicolons (;). You can add a maximum of 10 IP addresses or CIDR blocks.
     *   Valid values of N in IpControlPolicys.N: `[1,100]`.
     *
     * @example 114.1.1.0/24
     *
     * @var string
     */
    public $cidrIp;
    protected $_name = [
        'appId'  => 'AppId',
        'cidrIp' => 'CidrIp',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipControlPolicys
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

        return $model;
    }
}
