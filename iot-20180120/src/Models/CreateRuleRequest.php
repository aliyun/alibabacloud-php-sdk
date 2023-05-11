<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateRuleRequest extends Model
{
    /**
     * @description The format of the data that is processed based on the rule. The value of this parameter must be consistent with the format of device data that you want to process. Valid values:
     *
     *   **JSON**: JSON data. This is the default value.
     *   **BINARY**: binary data.
     *
     * >  If this parameter is set to **BINARY**, you cannot set the **TopicType** parameter to 0 and cannot forward data to Tablestore and ApsaraDB RDS.
     * @example JSON
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The ID of the instance. On the **Overview** page in the IoT Platform console, you can view the **ID** of the instance.
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     * >*   If the **Overview** page or instance ID is not displayed in the IoT Platform console, you do not need to configure this parameter.
     *
     * For more information about the instance, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The name of the data forwarding rule. The rule name must be 1 to 30 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-).
     *
     * @example iot_test1
     *
     * @var string
     */
    public $name;

    /**
     * @description The ProductKey of the product to which the rule applies.
     *
     * @example a1T27vz****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The ID of the resource group to which the rule is assigned. You can view the resource group information in the [Resource Management console](https://resourcemanager.console.aliyun.com/resource-groups).
     *
     * If you do not specify this parameter, the rule is assigned to the default resource group.
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The description of the rule. The description can be up to 100 characters in length.
     *
     * @example rule test
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @description The SQL SELECT statement that you want to execute. For more information about the syntax, see [SQL statements](~~30554~~).
     *
     * >  This parameter specifies the fields in SELECT statements. For example, if the SELECT statement is `SELECT a,b,c`, specify `a,b,c` for this parameter.
     * @example deviceName() as deviceName, items.Humidity.value as Humidity, items.Temperature.value as Temperature
     *
     * @var string
     */
    public $select;

    /**
     * @description The topic to which this rule is applied. Format: `${deviceName}/topicShortName`. `${deviceName}` specifies the name of the device, and `topicShortName` specifies the custom name of the topic.
     *
     *   Basic communication topics or Thing Specification Language (TSL)-based communication topics. Format: `${deviceName}/topicShortName`. You can replace `${deviceName}` with the `+` wildcard character. The wildcard character indicates that the topic applies to all devices under the product. Valid values of `topicShortName`:
     *
     *   `/thing/event/property/post`: submits the property data of a device.
     *
     *   `/thing/event/${tsl.event.identifier}/post`: submits the event data of a device. `${tsl.event.identifier}` specifies the identifier of an event in the TSL model.
     *
     *   `/thing/lifecycle`: submits device lifecycle changes.
     *
     *   `/thing/downlink/reply/message`: sends a response to a request from IoT Platform.
     *
     *   `/thing/list/found`: submits the data when a gateway detects a new sub-device.
     *
     *   `/thing/topo/lifecycle`: submits device topology changes.
     *
     *   `/thing/event/property/history/post`: submits the historical property data of a device.
     *
     *   `/thing/event/${tsl.event.identifier}/post`: submits the historical event data of a device. `${tsl.event.identifier}` specifies the identifier of an event in the TSL model.
     *
     *   `/ota/upgrade`: submits the OTA update status.
     *
     *   `/ota/version/post`: submits OTA module versions.
     *
     *   `/thing/deviceinfo/update`: submits device tag changes.
     *
     *   `/edge/driver/${driver_id}/point_post`: submits pass-through data from Link IoT Edge. `${driver_id}` specifies the ID of the driver that a device uses to access Link IoT Edge.
     *
     * The `${packageId}/${jobId}/ota/job/status` topic submits the status of OTA update batches. This topic is a basic communication topic. `${packageId}` specifies the ID of the update package. `${jobId}` specifies the ID of the update batch.
     *
     *   Custom topics. Example: `${deviceName}/user/get`.
     *
     * When you specify a custom topic, you can use the `+` and `#` wildcard characters.
     *
     *   You can replace `${deviceName}` with the `+` wildcard character. The wildcard character specifies that the topic applies to all devices in the product.
     *
     *   You can add `/user/#` after ${deviceName}. The `#` wildcard character can match all field values at the levels that follow `/user`.
     *
     * For more information about how to use wildcard characters, see [Custom topics with one or more wildcard characters](~~85539~~).
     *
     *   Topics that are used to submit device status changes. The topic name is in the `${deviceName}` format.
     *
     * You can use the `+` wildcard character. In this case, the status changes of all devices under the product are submitted.
     * @example +/thing/event/property/post
     *
     * @var string
     */
    public $shortTopic;

    /**
     * @description The complete topic to which the rule applies.
     *
     * If you specify this parameter, you do not need to specify the **ShortTopic** and **TopicType** parameters.
     * @example /sys/g18l***\/device1/thing/event/property/post
     *
     * @var string
     */
    public $topic;

    /**
     * @description *   **0**: The topic is a basic communication topic or TSL-based communication topic. The topic that is used to submit the status of OTA update batches belongs to the basic communication topics.****
     *   **1**: a custom topic.
     *   **2**: The topic is used to submit device status changes. Format: `/as/mqtt/status/${productKey}/${deviceName}`.
     *
     * @example 1
     *
     * @var int
     */
    public $topicType;

    /**
     * @description The condition that is used to trigger the rule. For more information about the rule, see [SQL statements](~~30554~~).
     *
     * >  This parameter specifies the fields in the **WHERE** clause. For example, if the **WHERE** clause is `WHERE a > 10`, you must specify `a > 10` for this parameter.
     * @example Temperature>35
     *
     * @var string
     */
    public $where;
    protected $_name = [
        'dataType'        => 'DataType',
        'iotInstanceId'   => 'IotInstanceId',
        'name'            => 'Name',
        'productKey'      => 'ProductKey',
        'resourceGroupId' => 'ResourceGroupId',
        'ruleDesc'        => 'RuleDesc',
        'select'          => 'Select',
        'shortTopic'      => 'ShortTopic',
        'topic'           => 'Topic',
        'topicType'       => 'TopicType',
        'where'           => 'Where',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->ruleDesc) {
            $res['RuleDesc'] = $this->ruleDesc;
        }
        if (null !== $this->select) {
            $res['Select'] = $this->select;
        }
        if (null !== $this->shortTopic) {
            $res['ShortTopic'] = $this->shortTopic;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->topicType) {
            $res['TopicType'] = $this->topicType;
        }
        if (null !== $this->where) {
            $res['Where'] = $this->where;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RuleDesc'])) {
            $model->ruleDesc = $map['RuleDesc'];
        }
        if (isset($map['Select'])) {
            $model->select = $map['Select'];
        }
        if (isset($map['ShortTopic'])) {
            $model->shortTopic = $map['ShortTopic'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['TopicType'])) {
            $model->topicType = $map['TopicType'];
        }
        if (isset($map['Where'])) {
            $model->where = $map['Where'];
        }

        return $model;
    }
}
