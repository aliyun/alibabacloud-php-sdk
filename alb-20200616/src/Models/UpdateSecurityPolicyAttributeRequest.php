<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class UpdateSecurityPolicyAttributeRequest extends Model
{
    /**
     * @description 加密套件
     *
     * @var string[]
     */
    public $ciphers;

    /**
     * @description 幂等标识
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description  是否只预检此次请求
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description 安全策略id
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description 安全策略名称
     *
     * @var string
     */
    public $securityPolicyName;

    /**
     * @description TLS版本
     *
     * @var string[]
     */
    public $TLSVersions;
    protected $_name = [
        'ciphers'            => 'Ciphers',
        'clientToken'        => 'ClientToken',
        'dryRun'             => 'DryRun',
        'securityPolicyId'   => 'SecurityPolicyId',
        'securityPolicyName' => 'SecurityPolicyName',
        'TLSVersions'        => 'TLSVersions',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->securityPolicyName) {
            $res['SecurityPolicyName'] = $this->securityPolicyName;
        }
        if (null !== $this->TLSVersions) {
            $res['TLSVersions'] = $this->TLSVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSecurityPolicyAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ciphers'])) {
            if (!empty($map['Ciphers'])) {
                $model->ciphers = $map['Ciphers'];
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }
        if (isset($map['SecurityPolicyName'])) {
            $model->securityPolicyName = $map['SecurityPolicyName'];
        }
        if (isset($map['TLSVersions'])) {
            if (!empty($map['TLSVersions'])) {
                $model->TLSVersions = $map['TLSVersions'];
            }
        }

        return $model;
    }
}
