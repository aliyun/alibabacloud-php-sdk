<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class destConfig extends Model
{
    /**
     * @description Indicates whether message tracing is enabled when the destination data source is RocketMQ.
     *
     * @example false
     *
     * @var bool
     */
    public $enableMsgTrace;

    /**
     * @description The ID of the data source.
     *
     * @example e_abcdefj
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The type of the data source. Valid values: `MYSQL`, `MARIADB`, `OB_MYSQL`, `OB_MYSQL_CE`, `OB_ORACLE`, `ORACLE`, `DB2_LUW`, `KAFKA`, `ROCKETMQ`, `DATAHUB`, `SYBASE`, `LOGPROXY`, `ADB`, `DBP_OP_ROUTE`, `DMS`, `IDB`, and `TIDB`.
     *
     * @example OB_MYSQL
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The tag of the Post message when the destination data source is RocketMQ.
     *
     * @example tag1
     *
     * @var string
     */
    public $msgTags;

    /**
     * @description The partitioned index, which must be specified if the destination data source is a message queue system, such as Kafka, DataHub, or RocketMQ, and the partitioning mode is set to ONE.
     *
     * @example 0
     *
     * @var int
     */
    public $partition;

    /**
     * @description The partitioning mode, which must be specified if the destination data source is a message queue system, such as Kafka, DataHub, or RocketMQ. Valid values: ONE, HASH, and TABLE.
     *
     * @example HASH
     *
     * @var string
     */
    public $partitionMode;

    /**
     * @description The producer group of the Post message when the destination data source is RocketMQ.
     *
     * @example producer-group-1
     *
     * @var string
     */
    public $producerGroup;

    /**
     * @description The timeout period in seconds for a single Post message when the destination data source is RocketMQ.
     *
     * @example 10
     *
     * @var int
     */
    public $sendMsgTimeout;

    /**
     * @description Indicates whether message sequencing is enabled when the destination data source is DataHub.
     *
     * @example false
     *
     * @var bool
     */
    public $sequenceEnable;

    /**
     * @description The start time of the sequence, which must be specified if the destination data source is DataHub and message sequencing is enabled. The value is a timestamp in seconds.
     *
     * @example 1656510473
     *
     * @var int
     */
    public $sequenceStartTimestamp;

    /**
     * @description The text serialization type, which must be specified if the destination data source is a message queue system, such as Kafka, DataHub, or RocketMQ. Valid values: Default, DefaultExtendColumnType, Canal, Dataworks, and SharePlex.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $serializerType;

    /**
     * @description The type of the topic to which the Post message belongs when the destination data source is DataHub. Valid values: Tuple and Blob.
     *
     * @example TUPLE
     *
     * @var string
     */
    public $topicType;
    protected $_name = [
        'enableMsgTrace'         => 'EnableMsgTrace',
        'endpointId'             => 'EndpointId',
        'endpointType'           => 'EndpointType',
        'msgTags'                => 'MsgTags',
        'partition'              => 'Partition',
        'partitionMode'          => 'PartitionMode',
        'producerGroup'          => 'ProducerGroup',
        'sendMsgTimeout'         => 'SendMsgTimeout',
        'sequenceEnable'         => 'SequenceEnable',
        'sequenceStartTimestamp' => 'SequenceStartTimestamp',
        'serializerType'         => 'SerializerType',
        'topicType'              => 'TopicType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableMsgTrace) {
            $res['EnableMsgTrace'] = $this->enableMsgTrace;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->msgTags) {
            $res['MsgTags'] = $this->msgTags;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }
        if (null !== $this->partitionMode) {
            $res['PartitionMode'] = $this->partitionMode;
        }
        if (null !== $this->producerGroup) {
            $res['ProducerGroup'] = $this->producerGroup;
        }
        if (null !== $this->sendMsgTimeout) {
            $res['SendMsgTimeout'] = $this->sendMsgTimeout;
        }
        if (null !== $this->sequenceEnable) {
            $res['SequenceEnable'] = $this->sequenceEnable;
        }
        if (null !== $this->sequenceStartTimestamp) {
            $res['SequenceStartTimestamp'] = $this->sequenceStartTimestamp;
        }
        if (null !== $this->serializerType) {
            $res['SerializerType'] = $this->serializerType;
        }
        if (null !== $this->topicType) {
            $res['TopicType'] = $this->topicType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableMsgTrace'])) {
            $model->enableMsgTrace = $map['EnableMsgTrace'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['MsgTags'])) {
            $model->msgTags = $map['MsgTags'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }
        if (isset($map['PartitionMode'])) {
            $model->partitionMode = $map['PartitionMode'];
        }
        if (isset($map['ProducerGroup'])) {
            $model->producerGroup = $map['ProducerGroup'];
        }
        if (isset($map['SendMsgTimeout'])) {
            $model->sendMsgTimeout = $map['SendMsgTimeout'];
        }
        if (isset($map['SequenceEnable'])) {
            $model->sequenceEnable = $map['SequenceEnable'];
        }
        if (isset($map['SequenceStartTimestamp'])) {
            $model->sequenceStartTimestamp = $map['SequenceStartTimestamp'];
        }
        if (isset($map['SerializerType'])) {
            $model->serializerType = $map['SerializerType'];
        }
        if (isset($map['TopicType'])) {
            $model->topicType = $map['TopicType'];
        }

        return $model;
    }
}
