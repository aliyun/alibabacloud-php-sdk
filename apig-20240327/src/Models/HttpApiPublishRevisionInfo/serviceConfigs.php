<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiBackendMatchConditions;
use AlibabaCloud\Tea\Model;

class serviceConfigs extends Model
{
    /**
     * @example gs-xxx
     *
     * @var string
     */
    public $gatewayServiceId;

    /**
     * @var HttpApiBackendMatchConditions
     */
    public $match;

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
     * @example v1
     *
     * @var string
     */
    public $version;

    /**
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'gatewayServiceId' => 'gatewayServiceId',
        'match'            => 'match',
        'port'             => 'port',
        'protocol'         => 'protocol',
        'version'          => 'version',
        'weight'           => 'weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayServiceId) {
            $res['gatewayServiceId'] = $this->gatewayServiceId;
        }
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayServiceId'])) {
            $model->gatewayServiceId = $map['gatewayServiceId'];
        }
        if (isset($map['match'])) {
            $model->match = HttpApiBackendMatchConditions::fromMap($map['match']);
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
