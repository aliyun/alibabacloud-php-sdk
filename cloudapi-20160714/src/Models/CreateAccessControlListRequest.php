<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessControlListRequest extends Model
{
    /**
     * @description The name of the ACL. The name must be 1 to 30 characters in length, and can contain letters, digits, periods (.), hyphens (-), forward slashes (/), and underscores (_). The name must be unique within the region.
     *
     * This parameter is required.
     * @example testAcl
     *
     * @var string
     */
    public $aclName;

    /**
     * @description The IP version of the Classic Load Balancer (CLB) instance with which the ACL is associated. Valid values:
     *
     *   **ipv4**
     *   **ipv6**
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'aclName'          => 'AclName',
        'addressIPVersion' => 'AddressIPVersion',
        'securityToken'    => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessControlListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
