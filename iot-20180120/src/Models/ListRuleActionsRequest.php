<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListRuleActionsRequest extends Model
{
    /**
     * @description The ID of the instance. On the **Overview** page in the IoT Platform console, you can view the **ID** of the instance.
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     * >*   If the **Overview** page or instance ID is not displayed in the IoT Platform console, you do not need to configure this parameter.
     *
     * For more information about the instance, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the rule.
     *
     * You can log on to the IoT Platform console and go to the details page of the instance that you want to manage. On the instance details page, choose **Rules Engine** > **Data Forwarding** to obtain the rule ID. Alternatively, you can call the [ListRule](~~69486~~) operation to view the value of the **Id** parameter in the response.
     * @example 10000
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'ruleId'        => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRuleActionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
