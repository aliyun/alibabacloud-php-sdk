<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListSystemSecurityPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class securityPolicies extends Model
{
    /**
     * @description The cipher suites.
     *
     * @example ECDHE-ECDSA-AES128-SHA
     *
     * @var string
     */
    public $ciphers;

    /**
     * @description The TLS policy ID.
     *
     * @example sp-3fdab6dkkke10s****
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The TLS policy name.
     *
     * @example test
     *
     * @var string
     */
    public $securityPolicyName;

    /**
     * @description The version of the TLS protocol.
     *
     * @example TLSv1.0
     *
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
        if (null !== $this->securityPolicyName) {
            $res['SecurityPolicyName'] = $this->securityPolicyName;
        }
        if (null !== $this->tlsVersion) {
            $res['TlsVersion'] = $this->tlsVersion;
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
