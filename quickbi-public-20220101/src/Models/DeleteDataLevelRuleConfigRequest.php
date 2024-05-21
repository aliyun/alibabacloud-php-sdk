<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeleteDataLevelRuleConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 7c7223ae-****-3c744528014b
     *
     * @var string
     */
    public $cubeId;

    /**
     * @description This parameter is required.
     *
     * @example a5bb24da-****-a891683e14da
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'cubeId' => 'CubeId',
        'ruleId' => 'RuleId',
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
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDataLevelRuleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
