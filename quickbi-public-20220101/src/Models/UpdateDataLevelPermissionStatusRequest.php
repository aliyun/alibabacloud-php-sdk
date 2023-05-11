<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataLevelPermissionStatusRequest extends Model
{
    /**
     * @description The ID of the training dataset that you want to remove from the specified custom linguistic model.
     *
     * @example 7c7223ae-****-3c744528014b
     *
     * @var string
     */
    public $cubeId;

    /**
     * @example 1
     *
     * @var int
     */
    public $isOpen;

    /**
     * @example ROW_LEVEL
     *
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'cubeId'   => 'CubeId',
        'isOpen'   => 'IsOpen',
        'ruleType' => 'RuleType',
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
        if (null !== $this->isOpen) {
            $res['IsOpen'] = $this->isOpen;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataLevelPermissionStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }
        if (isset($map['IsOpen'])) {
            $model->isOpen = $map['IsOpen'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
