<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class ModifyDcdnWafPolicyDomainsRequest extends Model
{
    /**
     * @var string
     */
    public $bindDomains;

    /**
     * @var int
     */
    public $method;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $unbindDomains;
    protected $_name = [
        'bindDomains' => 'BindDomains',
        'method' => 'Method',
        'policyId' => 'PolicyId',
        'unbindDomains' => 'UnbindDomains',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
