<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest\restApiConfig\environment;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiBackendMatchConditions;
use AlibabaCloud\Tea\Model;

class serviceConfigs extends Model
{
    /**
     * @description Configuration of matching conditions related to API deployment.
     *
     * @var HttpApiBackendMatchConditions
     */
    public $match;

    /**
     * @description Service port, do not provide for dynamic ports.
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
     * @description Weight, range [1,100], valid only in the by-ratio scenario.
     *
     * @example 49
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'match' => 'match',
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
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
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
     * @return serviceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['match'])) {
            $model->match = HttpApiBackendMatchConditions::fromMap($map['match']);
        }
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
