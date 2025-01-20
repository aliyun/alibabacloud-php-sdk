<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody\data;

use AlibabaCloud\Dara\Model;

class clusters extends Model
{
    /**
     * @var int
     */
    public $defaultCheckPort;
    /**
     * @var int
     */
    public $defaultPort;
    /**
     * @var string
     */
    public $healthCheckerType;
    /**
     * @var mixed[]
     */
    public $metadata;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var bool
     */
    public $useIPPort4Check;
    protected $_name = [
        'defaultCheckPort'  => 'DefaultCheckPort',
        'defaultPort'       => 'DefaultPort',
        'healthCheckerType' => 'HealthCheckerType',
        'metadata'          => 'Metadata',
        'name'              => 'Name',
        'serviceName'       => 'ServiceName',
        'useIPPort4Check'   => 'UseIPPort4Check',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultCheckPort) {
            $res['DefaultCheckPort'] = $this->defaultCheckPort;
        }

        if (null !== $this->defaultPort) {
            $res['DefaultPort'] = $this->defaultPort;
        }

        if (null !== $this->healthCheckerType) {
            $res['HealthCheckerType'] = $this->healthCheckerType;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->useIPPort4Check) {
            $res['UseIPPort4Check'] = $this->useIPPort4Check;
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
        if (isset($map['DefaultCheckPort'])) {
            $model->defaultCheckPort = $map['DefaultCheckPort'];
        }

        if (isset($map['DefaultPort'])) {
            $model->defaultPort = $map['DefaultPort'];
        }

        if (isset($map['HealthCheckerType'])) {
            $model->healthCheckerType = $map['HealthCheckerType'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['UseIPPort4Check'])) {
            $model->useIPPort4Check = $map['UseIPPort4Check'];
        }

        return $model;
    }
}
