<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteRequest\backendConfig;

use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @description The service port. If you want to use a dynamic port, do not pass this parameter.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol. Valid values:
     *
     *   HTTP
     *   HTTPS
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The service ID.
     *
     * @example svc-crbgq0dlhtgr***
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service version. Pass this parameter for tag-based routing.
     *
     * @example v1
     *
     * @var string
     */
    public $version;

    /**
     * @description The percentage value of traffic.
     *
     * @example 49
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'port' => 'port',
        'protocol' => 'protocol',
        'serviceId' => 'serviceId',
        'version' => 'version',
        'weight' => 'weight',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
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
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
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
