<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateRuleActionRequest extends Model
{
    /**
     * @description The configurations of the rule action. You must specify a JSON string. The configurations vary based on the types of rule actions. For more information about required syntax and examples, see the following tables.
     *
     * @example {"topic":"/a1POX0c****\/device1/user/get","topicType":1}
     *
     * @var string
     */
    public $configuration;

    /**
     * @description Specifies whether the rule action forwards error operation data. Error operation data is generated when the rules engine failed to forward data from the IoT Platform topic to the destination cloud service. A data forwarding failure indicates that forwarding retries also fail. Valid values:
     *
     *   **true**: forwards error operation data.
     *   **false**: forwards normal data instead of error operation data.
     *
     * Default value: **false**.
     * @example false
     *
     * @var bool
     */
    public $errorActionFlag;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the rule for which you want to create an action. You can log on to the IoT Platform console, and choose **Rules** > **Data Forwarding** to view the rule ID. You can also call the [ListRule](~~69486~~) operation and view the rule ID in the response.
     *
     * @example 100000
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The type of the rule action. Valid values:
     *
     *   **REPUBLISH**: forwards topic data that is processed by the rules engine to another IoT Platform topic.
     *   **AMQP**: forwards data to an AMQP consumer group.
     *   **MNS**: forwards data that is processed by the rules engine to Message Service (MNS).
     *   **FC**: forwards topic data that is processed by the rules engine to Function Compute for event computing.
     *   **OTS**: forwards data that is processed by the rules engine to OTS for NoSQL data storage.
     *
     * >  If you set the **DataType** parameter to **BINARY**, rules are created in the binary format. These rules cannot be used to forward data to Tablestore.
     * @example REPUBLISH
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configuration'   => 'Configuration',
        'errorActionFlag' => 'ErrorActionFlag',
        'iotInstanceId'   => 'IotInstanceId',
        'ruleId'          => 'RuleId',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->errorActionFlag) {
            $res['ErrorActionFlag'] = $this->errorActionFlag;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRuleActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['ErrorActionFlag'])) {
            $model->errorActionFlag = $map['ErrorActionFlag'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
