<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiBackendMatchConditions;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\serviceConfigs\observabilityRouteConfig;

class serviceConfigs extends Model
{
    /**
     * @var string
     */
    public $gatewayServiceId;

    /**
     * @var string
     */
    public $intentCode;

    /**
     * @var HttpApiBackendMatchConditions
     */
    public $match;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelNamePattern;

    /**
     * @var string
     */
    public $multiServiceRouteStrategy;

    /**
     * @var string
     */
    public $name;

    /**
     * @var observabilityRouteConfig
     */
    public $observabilityRouteConfig;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'gatewayServiceId' => 'gatewayServiceId',
        'intentCode' => 'intentCode',
        'match' => 'match',
        'modelName' => 'modelName',
        'modelNamePattern' => 'modelNamePattern',
        'multiServiceRouteStrategy' => 'multiServiceRouteStrategy',
        'name' => 'name',
        'observabilityRouteConfig' => 'observabilityRouteConfig',
        'port' => 'port',
        'protocol' => 'protocol',
        'serviceId' => 'serviceId',
        'version' => 'version',
        'weight' => 'weight',
    ];

    public function validate()
    {
        if (null !== $this->match) {
            $this->match->validate();
        }
        if (null !== $this->observabilityRouteConfig) {
            $this->observabilityRouteConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayServiceId) {
            $res['gatewayServiceId'] = $this->gatewayServiceId;
        }

        if (null !== $this->intentCode) {
            $res['intentCode'] = $this->intentCode;
        }

        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toArray($noStream) : $this->match;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelNamePattern) {
            $res['modelNamePattern'] = $this->modelNamePattern;
        }

        if (null !== $this->multiServiceRouteStrategy) {
            $res['multiServiceRouteStrategy'] = $this->multiServiceRouteStrategy;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->observabilityRouteConfig) {
            $res['observabilityRouteConfig'] = null !== $this->observabilityRouteConfig ? $this->observabilityRouteConfig->toArray($noStream) : $this->observabilityRouteConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayServiceId'])) {
            $model->gatewayServiceId = $map['gatewayServiceId'];
        }

        if (isset($map['intentCode'])) {
            $model->intentCode = $map['intentCode'];
        }

        if (isset($map['match'])) {
            $model->match = HttpApiBackendMatchConditions::fromMap($map['match']);
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelNamePattern'])) {
            $model->modelNamePattern = $map['modelNamePattern'];
        }

        if (isset($map['multiServiceRouteStrategy'])) {
            $model->multiServiceRouteStrategy = $map['multiServiceRouteStrategy'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['observabilityRouteConfig'])) {
            $model->observabilityRouteConfig = observabilityRouteConfig::fromMap($map['observabilityRouteConfig']);
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
