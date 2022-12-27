<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainDetailResponseBody\domain;

use AlibabaCloud\Tea\Model;

class defenseScenes extends Model
{
    /**
     * @example waf_group
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @example 10000002
     *
     * @var int
     */
    public $policyId;
    protected $_name = [
        'defenseScene' => 'DefenseScene',
        'policyId'     => 'PolicyId',
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

        return $model;
    }
}
