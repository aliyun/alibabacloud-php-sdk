<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeDriverVersionRequest extends Model
{
    /**
     * @example -XX:+PrintGCDetails
     *
     * @var string
     */
    public $argument;

    /**
     * @example {"deviceConfig":{"required":false},"driverConfig":{"required":false}}
     *
     * @var string
     */
    public $configCheckRule;

    /**
     * @example {"privileged":1,"devMappings":[],"volumeMappings":[],"hostNetworkMode":0,"portMappings":[]}
     *
     * @var string
     */
    public $containerConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @example [{"format":"JSON","content":"{\"defaultConfig\":\"this is default driver config demo\"}"}]
     *
     * @var string
     */
    public $driverConfig;

    /**
     * @example fec565038d7544978d9aed5c1a******
     *
     * @var string
     */
    public $driverId;

    /**
     * @example 1.2.0
     *
     * @var string
     */
    public $driverVersion;

    /**
     * @example 2.0.0
     *
     * @var string
     */
    public $edgeVersion;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example {"ossAddress":"http://nova-scene-daily.oss-cn-shanghai.aliyuncs.com/driver/a8d6e4acc6941ecea8f0cfb30c******\/ck3n3koe200003h6zf******.zip"}
     *
     * @var string
     */
    public $sourceConfig;
    protected $_name = [
        'argument'        => 'Argument',
        'configCheckRule' => 'ConfigCheckRule',
        'containerConfig' => 'ContainerConfig',
        'description'     => 'Description',
        'driverConfig'    => 'DriverConfig',
        'driverId'        => 'DriverId',
        'driverVersion'   => 'DriverVersion',
        'edgeVersion'     => 'EdgeVersion',
        'iotInstanceId'   => 'IotInstanceId',
        'sourceConfig'    => 'SourceConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->argument) {
            $res['Argument'] = $this->argument;
        }
        if (null !== $this->configCheckRule) {
            $res['ConfigCheckRule'] = $this->configCheckRule;
        }
        if (null !== $this->containerConfig) {
            $res['ContainerConfig'] = $this->containerConfig;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->driverConfig) {
            $res['DriverConfig'] = $this->driverConfig;
        }
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }
        if (null !== $this->driverVersion) {
            $res['DriverVersion'] = $this->driverVersion;
        }
        if (null !== $this->edgeVersion) {
            $res['EdgeVersion'] = $this->edgeVersion;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->sourceConfig) {
            $res['SourceConfig'] = $this->sourceConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEdgeDriverVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Argument'])) {
            $model->argument = $map['Argument'];
        }
        if (isset($map['ConfigCheckRule'])) {
            $model->configCheckRule = $map['ConfigCheckRule'];
        }
        if (isset($map['ContainerConfig'])) {
            $model->containerConfig = $map['ContainerConfig'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DriverConfig'])) {
            $model->driverConfig = $map['DriverConfig'];
        }
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['DriverVersion'])) {
            $model->driverVersion = $map['DriverVersion'];
        }
        if (isset($map['EdgeVersion'])) {
            $model->edgeVersion = $map['EdgeVersion'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SourceConfig'])) {
            $model->sourceConfig = $map['SourceConfig'];
        }

        return $model;
    }
}
