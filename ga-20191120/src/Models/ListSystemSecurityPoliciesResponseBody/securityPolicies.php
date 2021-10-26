<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class securityPolicies extends Model
{
    /**
     * @var string
     */
    public $securityPolicyId;

    /**
     * @var string[]
     */
    public $tlsVersions;

    /**
     * @var string[]
     */
    public $ciphers;
    protected $_name = [
        'securityPolicyId' => 'SecurityPolicyId',
        'tlsVersions'      => 'TlsVersions',
        'ciphers'          => 'Ciphers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->tlsVersions) {
            $res['TlsVersions'] = $this->tlsVersions;
        }
        if (null !== $this->ciphers) {
            $res['Ciphers'] = $this->ciphers;
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
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }
        if (isset($map['TlsVersions'])) {
            if (!empty($map['TlsVersions'])) {
                $model->tlsVersions = $map['TlsVersions'];
            }
        }
        if (isset($map['Ciphers'])) {
            if (!empty($map['Ciphers'])) {
                $model->ciphers = $map['Ciphers'];
            }
        }

        return $model;
    }
}
