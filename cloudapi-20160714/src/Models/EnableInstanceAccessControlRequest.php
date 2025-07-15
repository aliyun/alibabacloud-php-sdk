<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class EnableInstanceAccessControlRequest extends Model
{
    /**
     * @description The ID of the access control policy.
     *
     * This parameter is required.
     *
     * @example acl-bp11escro2et2tioscy52
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The ACL type. Valid values:
     *
     *   black: blacklist
     *   white: whitelist
     *
     * This parameter is required.
     *
     * @example black
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The IP version. Valid values: **ipv4** and **ipv6**.
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     *
     * @example apigateway-cn-v6419k43xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'aclId' => 'AclId',
        'aclType' => 'AclType',
        'addressIPVersion' => 'AddressIPVersion',
        'instanceId' => 'InstanceId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableInstanceAccessControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
