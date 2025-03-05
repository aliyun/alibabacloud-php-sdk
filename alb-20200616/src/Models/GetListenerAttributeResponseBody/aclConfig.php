<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\aclConfig\aclRelations;
use AlibabaCloud\Tea\Model;

class aclConfig extends Model
{
    /**
     * @description The IDs of the ACLs that are associated with the listener.
     *
     * @var aclRelations[]
     */
    public $aclRelations;

    /**
     * @description The type of the ACL. Valid values:
     *
     *   **White**: a whitelist. Only requests from the IP addresses or CIDR blocks in the network ACL are forwarded. Whitelists are applicable to scenarios in which you want to allow only specific IP addresses to access an application. Your service may be adversely affected if the whitelist is not properly configured. If a whitelist is configured for a listener, only requests from IP addresses that are on the whitelist are forwarded by the listener.
     *
     * If you enable a whitelist but do not add an IP address to the whitelist, the listener forwards all requests.
     *
     *   **Black**: a blacklist. Requests from the IP addresses or CIDR blocks in the network ACL are denied. Blacklists are suitable for scenarios in which you want to deny access from specific IP addresses or CIDR blocks to an application.
     *
     * If a blacklist is configured for a listener but no IP addresses are added to the blacklist, the listener forwards all requests.
     * @example White
     *
     * @var string
     */
    public $aclType;
    protected $_name = [
        'aclRelations' => 'AclRelations',
        'aclType'      => 'AclType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclRelations) {
            $res['AclRelations'] = [];
            if (null !== $this->aclRelations && \is_array($this->aclRelations)) {
                $n = 0;
                foreach ($this->aclRelations as $item) {
                    $res['AclRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclRelations'])) {
            if (!empty($map['AclRelations'])) {
                $model->aclRelations = [];
                $n                   = 0;
                foreach ($map['AclRelations'] as $item) {
                    $model->aclRelations[$n++] = null !== $item ? aclRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }

        return $model;
    }
}
