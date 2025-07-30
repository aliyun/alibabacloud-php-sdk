<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\EnDisableScalingRulesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example selectdb-cn-pe33jc1nd01-be
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The instance ID.
     *
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description Indicates whether the scheduled scaling policy is enabled.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $scalingRulesEnable;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dbInstanceId' => 'DbInstanceId',
        'scalingRulesEnable' => 'ScalingRulesEnable',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->scalingRulesEnable) {
            $res['ScalingRulesEnable'] = $this->scalingRulesEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['ScalingRulesEnable'])) {
            $model->scalingRulesEnable = $map['ScalingRulesEnable'];
        }

        return $model;
    }
}
