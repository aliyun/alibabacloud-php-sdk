<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyIpControlPolicyItemRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $ipControlId;

    /**
     * @var string
     */
    public $policyItemId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $cidrIp;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'ipControlId'   => 'IpControlId',
        'policyItemId'  => 'PolicyItemId',
        'appId'         => 'AppId',
        'cidrIp'        => 'CidrIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }
        if (null !== $this->policyItemId) {
            $res['PolicyItemId'] = $this->policyItemId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyIpControlPolicyItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }
        if (isset($map['PolicyItemId'])) {
            $model->policyItemId = $map['PolicyItemId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }

        return $model;
    }
}
