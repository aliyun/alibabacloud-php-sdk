<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody\data;

use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @var int
     */
    public $defaultCheckPort;

    /**
     * @var string
     */
    public $healthCheckerType;

    /**
     * @var bool
     */
    public $useIPPort4Check;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $defaultPort;

    /**
     * @var mixed[]
     */
    public $metadata;
    protected $_name = [
        'defaultCheckPort'  => 'DefaultCheckPort',
        'healthCheckerType' => 'HealthCheckerType',
        'useIPPort4Check'   => 'UseIPPort4Check',
        'serviceName'       => 'ServiceName',
        'name'              => 'Name',
        'defaultPort'       => 'DefaultPort',
        'metadata'          => 'Metadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultCheckPort) {
            $res['DefaultCheckPort'] = $this->defaultCheckPort;
        }
        if (null !== $this->healthCheckerType) {
            $res['HealthCheckerType'] = $this->healthCheckerType;
        }
        if (null !== $this->useIPPort4Check) {
            $res['UseIPPort4Check'] = $this->useIPPort4Check;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->defaultPort) {
            $res['DefaultPort'] = $this->defaultPort;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultCheckPort'])) {
            $model->defaultCheckPort = $map['DefaultCheckPort'];
        }
        if (isset($map['HealthCheckerType'])) {
            $model->healthCheckerType = $map['HealthCheckerType'];
        }
        if (isset($map['UseIPPort4Check'])) {
            $model->useIPPort4Check = $map['UseIPPort4Check'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DefaultPort'])) {
            $model->defaultPort = $map['DefaultPort'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        return $model;
    }
}
