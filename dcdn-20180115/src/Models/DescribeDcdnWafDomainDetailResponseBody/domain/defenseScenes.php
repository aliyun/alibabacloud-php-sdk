<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainDetailResponseBody\domain;

use AlibabaCloud\Dara\Model;

class defenseScenes extends Model
{
    /**
     * @var string
     */
    public $defenseScene;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyIds;
    protected $_name = [
        'defenseScene' => 'DefenseScene',
        'policyId' => 'PolicyId',
        'policyIds' => 'PolicyIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
