<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DissociateInstanceWithPrivateDNSShrinkRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example apigateway-hz-ead4f4b0bac8
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The internal domain names included in the resolution.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $intranetDomainsShrink;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'intranetDomainsShrink' => 'IntranetDomains',
        'securityToken' => 'SecurityToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intranetDomainsShrink) {
            $res['IntranetDomains'] = $this->intranetDomainsShrink;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DissociateInstanceWithPrivateDNSShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntranetDomains'])) {
            $model->intranetDomainsShrink = $map['IntranetDomains'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
