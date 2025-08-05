<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkCustomizedKafkaConnectorParameters;

use AlibabaCloud\Tea\Model;

class connectorParameters extends Model
{
    /**
     * @description The connector configurations.
     *
     * @example {
     * "connector.class": "com.mongodb.kafka.connect.MongoSinkConnector",
     * "tasks.max": "1",
     * "topics": "sourceA,sourceB"
     * }
     *
     * @var mixed[]
     */
    public $config;

    /**
     * @description The connector name.
     *
     * @example mongo-sink
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'config' => 'Config',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectorParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
