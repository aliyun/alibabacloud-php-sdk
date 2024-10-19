<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DissociateInstanceWithPrivateDNSRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example apigateway-hz-ead4f4b0bac8
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $intranetDomains;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'intranetDomains' => 'IntranetDomains',
        'securityToken'   => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intranetDomains) {
            $res['IntranetDomains'] = $this->intranetDomains;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DissociateInstanceWithPrivateDNSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntranetDomains'])) {
            if (!empty($map['IntranetDomains'])) {
                $model->intranetDomains = $map['IntranetDomains'];
            }
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
