<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListSystemSecurityPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class securityPolicies extends Model
{
    /**
     * @var string
     */
    public $ciphers;
    /**
     * @var string
     */
    public $securityPolicyId;
    /**
     * @var string
     */
    public $securityPolicyName;
    /**
     * @var string
     */
    public $tlsVersion;
    protected $_name = [
        'ciphers'            => 'Ciphers',
        'securityPolicyId'   => 'SecurityPolicyId',
        'securityPolicyName' => 'SecurityPolicyName',
        'tlsVersion'         => 'TlsVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ciphers) {
            $res['Ciphers'] = $this->ciphers;
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->securityPolicyName) {
            $res['SecurityPolicyName'] = $this->securityPolicyName;
        }

        if (null !== $this->tlsVersion) {
            $res['TlsVersion'] = $this->tlsVersion;
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
        if (isset($map['Ciphers'])) {
            $model->ciphers = $map['Ciphers'];
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        if (isset($map['SecurityPolicyName'])) {
            $model->securityPolicyName = $map['SecurityPolicyName'];
        }

        if (isset($map['TlsVersion'])) {
            $model->tlsVersion = $map['TlsVersion'];
        }

        return $model;
    }
}
