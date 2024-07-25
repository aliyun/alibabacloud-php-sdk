<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\PublishHttpApiRequest\environment\cloudProductConfig;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiBackendMatchConditions;
use AlibabaCloud\Tea\Model;

class containerServiceConfigs extends Model
{
    /**
     * @var HttpApiBackendMatchConditions
     */
    public $match;

    /**
     * @example test-service
     *
     * @var string
     */
    public $name;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'match'     => 'match',
        'name'      => 'name',
        'namespace' => 'namespace',
        'port'      => 'port',
        'protocol'  => 'protocol',
        'weight'    => 'weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerServiceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['match'])) {
            $model->match = HttpApiBackendMatchConditions::fromMap($map['match']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
