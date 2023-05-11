<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateRuleActionRequest extends Model
{
    /**
     * @description The ID of the rule action to be modified.
     *
     * After you call the [CreateRuleAction](~~69586~~) operation to create a rule action, the rule action ID is returned. You can call the [ListRuleActions](~~69517~~) operation to view the rule action ID.
     * @example 1000003
     *
     * @var int
     */
    public $actionId;

    /**
     * @description The configurations of the rule action. The configurations for different rule action types are different. For more information about the configurations for different rule action types, see [CreateRuleAction](~~69586~~).
     *
     * @example {"topic":"/a1iYSOl****\/device5/user/get","topicType":1}
     *
     * @var string
     */
    public $configuration;

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
     * @description The type of the rule action. Valid values:
     *
     *   **MNS**: forwards topic data that is processed by the rules engine to MNS.
     *   **FC**: forwards topic data that is processed by the rules engine to Function Compute for event computing.
     *   **REPUBLISH**: forwards topic data that is processed by the rules engine to another IoT Platform topic.
     *   **AMQP**: forwards data to an AMQP consumer group.
     *   **OTS**: forwards topic data that is processed by the rules engine to Tablestore for NoSQL data storage.
     *
     * > *   If you set the **DataType** parameter to **BINARY**, rules are created in the binary format. These rules cannot be used to forward data to Tablestore.
     * >*   Destination Alibaba Cloud services that are supported by the rules engine vary based on regions. For more information about the regions and destination cloud services that are supported by the rules engine, see [Regions and zones](~~85669~~).
     * @example REPUBLISH
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'actionId'      => 'ActionId',
        'configuration' => 'Configuration',
        'iotInstanceId' => 'IotInstanceId',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRuleActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
