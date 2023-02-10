<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateRuleRequest extends Model
{
    /**
     * @example JSON
     *
     * @var string
     */
    public $dataType;

    /**
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example iot_test1
     *
     * @var string
     */
    public $name;

    /**
     * @example a1T27vz****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example rule test
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @example deviceName() as deviceName, items.Humidity.value as Humidity, items.Temperature.value as Temperature
     *
     * @var string
     */
    public $select;

    /**
     * @example +/thing/event/property/post
     *
     * @var string
     */
    public $shortTopic;

    /**
     * @example /sys/g18l***\/device1/thing/event/property/post
     *
     * @var string
     */
    public $topic;

    /**
     * @example 1
     *
     * @var int
     */
    public $topicType;

    /**
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
