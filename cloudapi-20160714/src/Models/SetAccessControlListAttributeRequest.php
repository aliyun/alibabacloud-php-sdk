<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetAccessControlListAttributeRequest extends Model
{
    /**
     * @description The ID of the ACL.
     *
     * @example acl-bp1ohqkonqybecf4llbrc
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The name of the ACL.
     *
     * @example testAcl
     *
     * @var string
     */
    public $aclName;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'aclId'         => 'AclId',
        'aclName'       => 'AclName',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAccessControlListAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
