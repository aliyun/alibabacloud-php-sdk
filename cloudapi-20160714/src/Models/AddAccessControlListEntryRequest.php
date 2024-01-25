<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class AddAccessControlListEntryRequest extends Model
{
    /**
     * @description The ACL settings.
     *
     *   entry: the entries that you want to add to the ACL. You can add CIDR blocks. Separate multiple CIDR blocks with commas (,).
     *   comment: the description of the ACL.
     *
     * > You can add at most 50 IP addresses or CIDR blocks to an ACL in each call. If the IP address or CIDR block that you want to add to an ACL already exists, the IP address or CIDR block is not added. The entries that you add must be CIDR blocks.
     * @example [{\"entry\": \"192.168.1.0/24\", \"comment\": \"test\"}]
     *
     * @var string
     */
    public $aclEntrys;

    /**
     * @description The ID of the access control list (ACL).
     *
     * @example acl-bp1ohqkonqybecf4llbrc
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
     * @return AddAccessControlListEntryRequest
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
