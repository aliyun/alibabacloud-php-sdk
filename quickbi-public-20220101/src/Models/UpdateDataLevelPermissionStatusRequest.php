<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataLevelPermissionStatusRequest extends Model
{
    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var int
     */
    public $isOpen;

    /**
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
