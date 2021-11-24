<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class securityPolicies extends Model
{
    /**
     * @var string[]
     */
    public $ciphers;

    /**
     * @var string
     */
    public $securityPolicyId;

    /**
     * @var string[]
     */
    public $tlsVersions;
    protected $_name = [
        'ciphers'          => 'Ciphers',
        'securityPolicyId' => 'SecurityPolicyId',
        'tlsVersions'      => 'TlsVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphers) {
            $res['Ciphers'] = $this->ciphers;
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->tlsVersions) {
            $res['TlsVersions'] = $this->tlsVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ciphers'])) {
            if (!empty($map['Ciphers'])) {
                $model->ciphers = $map['Ciphers'];
            }
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }
        if (isset($map['TlsVersions'])) {
            if (!empty($map['TlsVersions'])) {
                $model->tlsVersions = $map['TlsVersions'];
            }
        }

        return $model;
    }
}
