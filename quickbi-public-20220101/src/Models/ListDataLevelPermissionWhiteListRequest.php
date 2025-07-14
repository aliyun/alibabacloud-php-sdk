<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListDataLevelPermissionWhiteListRequest extends Model
{
    /**
     * @description Dataset ID.
     *
     * This parameter is required.
     *
     * @example 3d5db23c-e4f2-49dd-a883-92285b48e14a
     *
     * @var string
     */
    public $cubeId;

    /**
     * @description Type of row and column permission that the whitelist belongs to:
     *
     * - ROW_LEVEL: Row-level permission
     * - COLUMN_LEVEL: Column-level permission
     *
     * This parameter is required.
     *
     * @example ROW_LEVEL
     *
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'cubeId' => 'CubeId',
        'ruleType' => 'RuleType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataLevelPermissionWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
