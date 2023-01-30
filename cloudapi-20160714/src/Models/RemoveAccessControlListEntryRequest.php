<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class RemoveAccessControlListEntryRequest extends Model
{
    /**
     * @description Sets the access control list (ACL).
     *
     *   entry: the IP addresses or CIDR blocks that you want to add to the ACL. Separate multiple IP addresses or CIDR blocks with commas (,).
     *   comment: the description of the ACL.
     *
     * > If the ACL is associated with a listener, you cannot remove all IP addresses from the ACL.
     * @example [{\"entry\":\"192.168.1.0/24\",\"comment\":\"WhiteIp\"}]
     *
     * @var string
     */
    public $aclEntrys;

    /**
     * @description The ID of the access control policy.
     *
     * @example acl-bp12ag0xxcfhq1ll68wp9
     *
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'aclEntrys'     => 'AclEntrys',
        'aclId'         => 'AclId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntrys) {
            $res['AclEntrys'] = $this->aclEntrys;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveAccessControlListEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntrys'])) {
            $model->aclEntrys = $map['AclEntrys'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
