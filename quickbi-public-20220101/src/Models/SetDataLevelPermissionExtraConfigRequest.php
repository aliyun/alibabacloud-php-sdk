<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class SetDataLevelPermissionExtraConfigRequest extends Model
{
    /**
     * @example 7c7223ae-******-3c744528014b
     *
     * @var string
     */
    public $cubeId;

    /**
     * @example NONE
     *
     * @var string
     */
    public $missHitPolicy;

    /**
     * @example ROW_LEVEL
     *
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'cubeId'        => 'CubeId',
        'missHitPolicy' => 'MissHitPolicy',
        'ruleType'      => 'RuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SetDataLevelPermissionExtraConfigRequest
     */
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
