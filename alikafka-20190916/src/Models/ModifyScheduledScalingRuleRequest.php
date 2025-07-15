<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class ModifyScheduledScalingRuleRequest extends Model
{
    /**
     * @description Specifies whether to enable the scheduled scaling rule. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  If the scaling task is scheduled to execute only once and you want to enable the scheduled scaling rule, make sure that the value of this parameter is at least 30 minutes later than the current point in time.
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example alikafka_serverless-cn-vxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region where the instance resides.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the scheduled scaling rule.
     *
     * This parameter is required.
     *
     * @example contact-id
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'enable' => 'Enable',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'ruleName' => 'RuleName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyScheduledScalingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
