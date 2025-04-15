<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source\sourceCustomizedKafkaConnectorParameters\connectorParameters;

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
        'workerParameters' => 'WorkerParameters',
    ];

    public function validate()
    {
        if (null !== $this->connectorParameters) {
            $this->connectorParameters->validate();
        }
        if (\is_array($this->workerParameters)) {
            Model::validateArray($this->workerParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectorPackageUrl) {
            $res['ConnectorPackageUrl'] = $this->connectorPackageUrl;
        }

        if (null !== $this->connectorParameters) {
            $res['ConnectorParameters'] = null !== $this->connectorParameters ? $this->connectorParameters->toArray($noStream) : $this->connectorParameters;
        }

        if (null !== $this->workerParameters) {
            if (\is_array($this->workerParameters)) {
                $res['WorkerParameters'] = [];
                foreach ($this->workerParameters as $key1 => $value1) {
                    $res['WorkerParameters'][$key1] = $value1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['WorkerParameters'])) {
                $model->workerParameters = [];
                foreach ($map['WorkerParameters'] as $key1 => $value1) {
                    $model->workerParameters[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
