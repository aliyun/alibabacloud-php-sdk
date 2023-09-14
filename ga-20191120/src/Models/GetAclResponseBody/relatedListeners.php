<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\GetAclResponseBody;

use AlibabaCloud\Tea\Model;

class relatedListeners extends Model
{
    /**
     * @description The type of the network ACL.
     *
     *   **White**: a whitelist. Only requests from the IP addresses or CIDR blocks in the ACL are forwarded. Whitelists apply to scenarios in which you want to allow only specified IP addresses to access an application. Your service may be adversely affected if the whitelist is not properly configured. After you configure a whitelist for a listener, only requests from the IP addresses that are added to the whitelist are forwarded by the listener. If the whitelist is enabled but no IP addresses are added to the network ACL, the listener does not forward requests.
     *   **Black**: a blacklist. All requests from the IP addresses or CIDR blocks in the ACL are blocked. Blacklists apply to scenarios in which you want to deny access from specific IP addresses to an application. If the blacklist is enabled but no IP addresses are added to the network ACL, the listener forwards all requests.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The ID of the listener.
     *
     * @example White
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The listeners that are associated with the network ACL.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'aclType'       => 'AclType',
        'listenerId'    => 'ListenerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedListeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        return $model;
    }
}
