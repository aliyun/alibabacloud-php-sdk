<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody\data;

use AlibabaCloud\Tea\Model;

class sourceConfig extends Model
{
    /**
     * @var bool
     */
    public $enableMsgTrace;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $msgTags;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var string
     */
    public $partitionMode;

    /**
     * @var string
     */
    public $producerGroup;

    /**
     * @var int
     */
    public $sendMsgTimeout;

    /**
     * @var bool
     */
    public $sequenceEnable;

    /**
     * @var int
     */
    public $sequenceStartTimestamp;

    /**
     * @var string
     */
    public $serializerType;

    /**
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
     * @return sourceConfig
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
