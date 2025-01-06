<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList\offsetList;

use AlibabaCloud\Tea\Model;

class offsetList extends Model
{
    /**
     * @description The latest offset in the partition of the topic.
     *
     * @example 9
     *
     * @var int
     */
    public $brokerOffset;

    /**
     * @description Client ID of the application.
     *
     * @example client-id-KafkaConsumerDemo
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The IP address of the client.
     *
     * @example 172.16.11.3
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The consumer offset in the partition of the topic.
     *
     * @example 9
     *
     * @var int
     */
    public $consumerOffset;

    /**
     * @description The time when the last consumed message in the partition was generated.
     *
     * @example 1566874931649
     *
     * @var int
     */
    public $lastTimestamp;

    /**
     * @description Member ID.
     *
     * @example client-id-KafkaConsumerDemo-70b64883-a911-4882-8084-598b958848b4
     *
     * @var string
     */
    public $memberId;

    /**
     * @description The partition ID.
     *
     * @example 0
     *
     * @var int
     */
    public $partition;
    protected $_name = [
        'brokerOffset'   => 'BrokerOffset',
        'clientId'       => 'ClientId',
        'clientIp'       => 'ClientIp',
        'consumerOffset' => 'ConsumerOffset',
        'lastTimestamp'  => 'LastTimestamp',
        'memberId'       => 'MemberId',
        'partition'      => 'Partition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brokerOffset) {
            $res['BrokerOffset'] = $this->brokerOffset;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->consumerOffset) {
            $res['ConsumerOffset'] = $this->consumerOffset;
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return offsetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BrokerOffset'])) {
            $model->brokerOffset = $map['BrokerOffset'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ConsumerOffset'])) {
            $model->consumerOffset = $map['ConsumerOffset'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }

        return $model;
    }
}
