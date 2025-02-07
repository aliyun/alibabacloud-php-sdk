<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Dara\Model;

class UpdateSecurityPolicyAttributeRequest extends Model
{
    /**
     * @var string[]
     */
    public $ciphers;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $securityPolicyId;
    /**
     * @var string
     */
    public $securityPolicyName;
    /**
     * @var string[]
     */
    public $tlsVersions;
    protected $_name = [
        'ciphers'            => 'Ciphers',
        'clientToken'        => 'ClientToken',
        'dryRun'             => 'DryRun',
        'regionId'           => 'RegionId',
        'securityPolicyId'   => 'SecurityPolicyId',
        'securityPolicyName' => 'SecurityPolicyName',
        'tlsVersions'        => 'TlsVersions',
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
                $n1             = 0;
                foreach ($this->ciphers as $item1) {
                    $res['Ciphers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->securityPolicyName) {
            $res['SecurityPolicyName'] = $this->securityPolicyName;
        }

        if (null !== $this->tlsVersions) {
            if (\is_array($this->tlsVersions)) {
                $res['TlsVersions'] = [];
                $n1                 = 0;
                foreach ($this->tlsVersions as $item1) {
                    $res['TlsVersions'][$n1++] = $item1;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        if (isset($map['SecurityPolicyName'])) {
            $model->securityPolicyName = $map['SecurityPolicyName'];
        }

        if (isset($map['TlsVersions'])) {
            if (!empty($map['TlsVersions'])) {
                $model->tlsVersions = [];
                $n1                 = 0;
                foreach ($map['TlsVersions'] as $item1) {
                    $model->tlsVersions[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
