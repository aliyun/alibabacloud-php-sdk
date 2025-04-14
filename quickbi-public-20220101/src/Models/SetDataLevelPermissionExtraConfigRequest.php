<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class SetDataLevelPermissionExtraConfigRequest extends Model
{
    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var string
     */
    public $missHitPolicy;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'cubeId' => 'CubeId',
        'missHitPolicy' => 'MissHitPolicy',
        'ruleType' => 'RuleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }

        if (null !== $this->missHitPolicy) {
            $res['MissHitPolicy'] = $this->missHitPolicy;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
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
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }

        if (isset($map['MissHitPolicy'])) {
            $model->missHitPolicy = $map['MissHitPolicy'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
