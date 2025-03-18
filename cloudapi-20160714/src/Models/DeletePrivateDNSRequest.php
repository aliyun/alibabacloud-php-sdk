<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeletePrivateDNSRequest extends Model
{
    /**
     * @description Specifies whether to force delete the resolution.
     *
     *   true: force deletes the resolution if the resolution is associated with an instance.
     *   false: does not force delete the resolution if the resolution is associated with an instance.
     *
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description The internal domain name.
     *
     * This parameter is required.
     *
     * @example api.demo.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The internal domain name resolution type. Valid values:
     *
     *   VPC: resolution for virtual private cloud (VPC) access authorizations. A resolution of this type can be bound only to traditional dedicated instances.
     *   A: resolution that supports A records. A resolution of this type can be bound only to VPC integration dedicated instances.
     *
     * This parameter is required.
     *
     * @example A
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'force' => 'Force',
        'intranetDomain' => 'IntranetDomain',
        'securityToken' => 'SecurityToken',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->intranetDomain) {
            $res['IntranetDomain'] = $this->intranetDomain;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePrivateDNSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
