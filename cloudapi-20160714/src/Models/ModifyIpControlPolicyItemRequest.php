<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class ModifyIpControlPolicyItemRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $cidrIp;
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
    public $securityToken;
    protected $_name = [
        'appId'         => 'AppId',
        'cidrIp'        => 'CidrIp',
        'ipControlId'   => 'IpControlId',
        'policyItemId'  => 'PolicyItemId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }

        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }

        if (null !== $this->policyItemId) {
            $res['PolicyItemId'] = $this->policyItemId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }

        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }

        if (isset($map['PolicyItemId'])) {
            $model->policyItemId = $map['PolicyItemId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
