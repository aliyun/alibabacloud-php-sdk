<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDestinationResponseBody;

use AlibabaCloud\Tea\Model;

class destination extends Model
{
    /**
     * @description The configuration data of the data destination.
     *
     * @example {"topic":"/a1POX0c****\/device1/user/get","topicType":1}
     *
     * @var string
     */
    public $configuration;

    /**
     * @description The ID of the data destination.
     *
     * @example 1003
     *
     * @var string
     */
    public $destinationId;

    /**
     * @description Indicates whether the data destination is configured to receive error operation data. Error operation data is data that failed to be forwarded for two consecutive times.
     *
     *   **true**: The data destination is configured to receive error operation data.
     *   **false**: The data destination is configured to receive regular data instead of error operation data.
     *
     * Default value: **false**.
     * @example false
     *
     * @var bool
     */
    public $isFailover;

    /**
     * @description The name of the data destination.
     *
     * @example DataPurpose
     *
     * @var string
     */
    public $name;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @description The operation that is performed on the data of the data destination.
     *
     *   **REPUBLISH**: forwards topic data that is processed by a parser script to an IoT Platform communication topic.
     *   **AMQP**: forwards topic data that is processed by a parser script to an Advanced Message Queuing Protocol (AMQP) consumer group.
     *   **DATAHUB**: forwards topic data to Alibaba Cloud DataHub for stream data processing.
     *   **ONS**: forwards topic data that is processed by a parser script to Message Queue for Apache RocketMQ for message distribution.
     *   **MNS**: forwards topic data to Message Service (MNS) for message transmission.
     *   **FC**: forwards topic data to Function Compute for event computing.
     *   **OTS**: forwards topic data to Tablestore for NoSQL data storage.
     *
     * @example REPUBLISH
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the data destination was created. The time is displayed in UTC. Format: `yyyy-MM-dd\"T\"HH:mm:ss.SSS\"Z\"`.
     *
     * @example 2022-03-27T12:45:43.000Z
     *
     * @var string
     */
    public $utcCreated;
    protected $_name = [
        'configuration' => 'Configuration',
        'destinationId' => 'DestinationId',
        'isFailover'    => 'IsFailover',
        'name'          => 'Name',
        'status'        => 'Status',
        'type'          => 'Type',
        'utcCreated'    => 'UtcCreated',
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
        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }
        if (null !== $this->isFailover) {
            $res['IsFailover'] = $this->isFailover;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->utcCreated) {
            $res['UtcCreated'] = $this->utcCreated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destination
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }
        if (isset($map['IsFailover'])) {
            $model->isFailover = $map['IsFailover'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UtcCreated'])) {
            $model->utcCreated = $map['UtcCreated'];
        }

        return $model;
    }
}
