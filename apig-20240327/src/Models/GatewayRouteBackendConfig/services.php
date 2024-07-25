<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GatewayRouteBackendConfig;

use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @example gs-cq2bmmdlhtgj***
     *
     * @var string
     */
    public $gatewayServiceId;

    /**
     * @example port
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
     * @example K8S
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example 49
     *
     * @var float
     */
    public $weight;
    protected $_name = [
        'gatewayServiceId' => 'gatewayServiceId',
        'port'             => 'port',
        'protocol'         => 'protocol',
        'sourceType'       => 'sourceType',
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
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayServiceId'])) {
            $model->gatewayServiceId = $map['gatewayServiceId'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
