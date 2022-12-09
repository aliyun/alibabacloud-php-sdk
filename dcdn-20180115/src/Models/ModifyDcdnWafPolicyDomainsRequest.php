<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class ModifyDcdnWafPolicyDomainsRequest extends Model
{
    /**
     * @var string
     */
    public $bindDomains;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $unbindDomains;
    protected $_name = [
        'bindDomains'   => 'BindDomains',
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
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['UnbindDomains'])) {
            $model->unbindDomains = $map['UnbindDomains'];
        }

        return $model;
    }
}
