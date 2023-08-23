<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainDetailResponseBody\domain;

use AlibabaCloud\Tea\Model;

class defenseScenes extends Model
{
    /**
     * @description The type of the protection policy. Valid values:
     *
     *   waf_group: basic web protection
     *   custom_acl: custom protection
     *   whitelist: whitelist
     *
     * @example waf_group
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @description The ID of the protection policy.
     *
     * @example 10000002
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The IDs of the protection policy.
     *
     * @example 10000001,10000004
     *
     * @var string
     */
    public $policyIds;
    protected $_name = [
        'defenseScene' => 'DefenseScene',
        'policyId'     => 'PolicyId',
        'policyIds'    => 'PolicyIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyIds) {
            $res['PolicyIds'] = $this->policyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defenseScenes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyIds'])) {
            $model->policyIds = $map['PolicyIds'];
        }

        return $model;
    }
}
