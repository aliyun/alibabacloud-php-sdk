<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourceCustomizedKafkaConnectorParameters\connectorParameters;
use AlibabaCloud\Tea\Model;

class sourceCustomizedKafkaConnectorParameters extends Model
{
    /**
     * @var string
     */
    public $connectorPackageUrl;

    /**
     * @var connectorParameters
     */
    public $connectorParameters;

    /**
     * @var mixed[]
     */
    public $workerParameters;
    protected $_name = [
        'connectorPackageUrl' => 'ConnectorPackageUrl',
        'connectorParameters' => 'ConnectorParameters',
        'workerParameters'    => 'WorkerParameters',
    ];

    public function validate()
    {
    }

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
     * @return sourceCustomizedKafkaConnectorParameters
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
