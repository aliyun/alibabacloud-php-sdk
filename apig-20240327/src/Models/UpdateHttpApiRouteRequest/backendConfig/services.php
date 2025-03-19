<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\backendConfig;

use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @description Service port, do not pass in for dynamic ports.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description Service protocol:
     * - HTTP.
     * - HTTPS.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description Service ID.
     *
     * @example svc-cr6pk4tlhtgm58e***
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Service version.
     *
     * @example v1
     *
     * @var string
     */
    public $version;

    /**
     * @description Percentage value of traffic ratio.
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
