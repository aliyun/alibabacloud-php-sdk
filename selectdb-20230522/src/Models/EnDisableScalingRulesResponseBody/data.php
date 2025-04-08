<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\EnDisableScalingRulesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var bool
     */
    public $scalingRulesEnable;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dbInstanceId' => 'DbInstanceId',
        'scalingRulesEnable' => 'ScalingRulesEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
