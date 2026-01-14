<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesResponseBody;

use AlibabaCloud\Dara\Model;

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
        'ciphers' => 'Ciphers',
        'securityPolicyId' => 'SecurityPolicyId',
        'tlsVersions' => 'TlsVersions',
    ];

    public function validate()
    {
        if (\is_array($this->ciphers)) {
            Model::validateArray($this->ciphers);
        }
        if (\is_array($this->tlsVersions)) {
            Model::validateArray($this->tlsVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ciphers) {
            if (\is_array($this->ciphers)) {
                $res['Ciphers'] = [];
                $n1 = 0;
                foreach ($this->ciphers as $item1) {
                    $res['Ciphers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->tlsVersions) {
            if (\is_array($this->tlsVersions)) {
                $res['TlsVersions'] = [];
                $n1 = 0;
                foreach ($this->tlsVersions as $item1) {
                    $res['TlsVersions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Ciphers'])) {
                $model->ciphers = [];
                $n1 = 0;
                foreach ($map['Ciphers'] as $item1) {
                    $model->ciphers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        if (isset($map['TlsVersions'])) {
            if (!empty($map['TlsVersions'])) {
                $model->tlsVersions = [];
                $n1 = 0;
                foreach ($map['TlsVersions'] as $item1) {
                    $model->tlsVersions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
