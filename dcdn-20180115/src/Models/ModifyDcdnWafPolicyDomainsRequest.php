<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class ModifyDcdnWafPolicyDomainsRequest extends Model
{
    /**
     * @description The domain names that you want to bind to the protection policy. You can specify up to 50 domain names. Separate multiple domain names with commas (,).
     *
     * > You can configure either **BindDomains** or **UnbindDomains**.
     * @example example.com,example2.com
     *
     * @var string
     */
    public $bindDomains;

    /**
     * @description The change method. Valid values:
     *
     *   0: replace
     *   1: add
     *   Default value: 0.
     *
     * >
     *
     *   This parameter takes effect only when you specify **BindDomains**. If you have bound a domain name indicated by **BindDomains** to the default protection policy, the `Policy.DefaultAndCustom.BindToSameDomain` error is returned.
     *
     *   You can only replace accelerated domain names that are bound to the default protection policy.
     *
     * @example 0
     *
     * @var int
     */
    public $method;

    /**
     * @description The ID of the protection policy. You can specify only one ID in each request.
     *
     * @example 1000001
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The domain names that you want to unbind from the protection policy. You can specify up to 50 domain names. Separate multiple domain names with commas (,).
     *
     * > You can configure either **BindDomains** or **UnbindDomains**.
     * @example example3.com
     *
     * @var string
     */
    public $unbindDomains;
    protected $_name = [
        'bindDomains'   => 'BindDomains',
        'method'        => 'Method',
        'policyId'      => 'PolicyId',
        'unbindDomains' => 'UnbindDomains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindDomains) {
            $res['BindDomains'] = $this->bindDomains;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->unbindDomains) {
            $res['UnbindDomains'] = $this->unbindDomains;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDcdnWafPolicyDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindDomains'])) {
            $model->bindDomains = $map['BindDomains'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['UnbindDomains'])) {
            $model->unbindDomains = $map['UnbindDomains'];
        }

        return $model;
    }
}
