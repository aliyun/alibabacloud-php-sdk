<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkCustomizedKafkaConnectorParameters\connectorParameters;
use AlibabaCloud\Tea\Model;

class sinkCustomizedKafkaConnectorParameters extends Model
{
    /**
     * @example "https://examplebucket.oss-cn-hangzhou.aliyuncs.com/testDoc/Old_Homebrew/2024-06-26%2022%3A34%3A08/opt/homebrew/homebrew/Library/Homebrew/test/support/fixtures/cask/AppWithBinary.zip?OSSAccessKeyId=ri&Expires=1725539627&Signature=rb8q3OpV2i3gZJ"
     *
     * @var string
     */
    public $connectorPackageUrl;

    /**
     * @var connectorParameters
     */
    public $connectorParameters;

    /**
     * @example {
     * "group.id": "connect-eb-cluster-KAFKA_CONNECTORC",
     * "offset.storage.topic": "connect-eb-offset-KAFKA_CONNECTOR_yjqC8K5ewC",
     * "config.storage.topic": "connect-eb-config-KAFKA_CONNECTOR_yjqC8K5ewC",
     * "status.storage.topic": "connect-eb-status-KAFKA_CONNECTOR_yjqC8K5ewC",
     * "consumer.group.id": "connector-eb-cluster-KAFKA_CONNECTOR_yjqC8K5ewC-mongo-sink",
     * "bootstrap.servers": "alikafka-post:9092"
     * }
     *
     * @var mixed[]
     */
    public $workerParameters;
    protected $_name = [
        'connectorPackageUrl' => 'ConnectorPackageUrl',
        'connectorParameters' => 'ConnectorParameters',
        'workerParameters' => 'WorkerParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectorPackageUrl) {
            $res['ConnectorPackageUrl'] = $this->connectorPackageUrl;
        }
        if (null !== $this->connectorParameters) {
            $res['ConnectorParameters'] = null !== $this->connectorParameters ? $this->connectorParameters->toMap() : null;
        }
        if (null !== $this->workerParameters) {
            $res['WorkerParameters'] = $this->workerParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkCustomizedKafkaConnectorParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectorPackageUrl'])) {
            $model->connectorPackageUrl = $map['ConnectorPackageUrl'];
        }
        if (isset($map['ConnectorParameters'])) {
            $model->connectorParameters = connectorParameters::fromMap($map['ConnectorParameters']);
        }
        if (isset($map['WorkerParameters'])) {
            $model->workerParameters = $map['WorkerParameters'];
        }

        return $model;
    }
}
