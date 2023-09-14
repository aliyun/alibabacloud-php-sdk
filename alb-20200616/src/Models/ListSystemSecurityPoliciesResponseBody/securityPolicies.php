<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListSystemSecurityPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class securityPolicies extends Model
{
    /**
     * @description The supported encryption algorithms.
     *
     * @var string[]
     */
    public $ciphers;

    /**
     * @description The ID of the security policy.
     *
     * @example spy-n0kn923****
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The TLS versions that are supported.
     *
     * @var string[]
     */
    public $TLSVersions;
    protected $_name = [
        'ciphers'          => 'Ciphers',
        'securityPolicyId' => 'SecurityPolicyId',
        'TLSVersions'      => 'TLSVersions',
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
        if (null !== $this->TLSVersions) {
            $res['TLSVersions'] = $this->TLSVersions;
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
        if (isset($map['TLSVersions'])) {
            if (!empty($map['TLSVersions'])) {
                $model->TLSVersions = $map['TLSVersions'];
            }
        }

        return $model;
    }
}
