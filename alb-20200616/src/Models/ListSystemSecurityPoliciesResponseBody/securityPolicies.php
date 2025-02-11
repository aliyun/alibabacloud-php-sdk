<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListSystemSecurityPoliciesResponseBody;

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
    public $TLSVersions;
    protected $_name = [
        'ciphers'          => 'Ciphers',
        'securityPolicyId' => 'SecurityPolicyId',
        'TLSVersions'      => 'TLSVersions',
    ];

    public function validate()
    {
        if (\is_array($this->ciphers)) {
            Model::validateArray($this->ciphers);
        }
        if (\is_array($this->TLSVersions)) {
            Model::validateArray($this->TLSVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ciphers) {
            if (\is_array($this->ciphers)) {
                $res['Ciphers'] = [];
                $n1             = 0;
                foreach ($this->ciphers as $item1) {
                    $res['Ciphers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->TLSVersions) {
            if (\is_array($this->TLSVersions)) {
                $res['TLSVersions'] = [];
                $n1                 = 0;
                foreach ($this->TLSVersions as $item1) {
                    $res['TLSVersions'][$n1++] = $item1;
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
                $n1             = 0;
                foreach ($map['Ciphers'] as $item1) {
                    $model->ciphers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        if (isset($map['TLSVersions'])) {
            if (!empty($map['TLSVersions'])) {
                $model->TLSVersions = [];
                $n1                 = 0;
                foreach ($map['TLSVersions'] as $item1) {
                    $model->TLSVersions[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
