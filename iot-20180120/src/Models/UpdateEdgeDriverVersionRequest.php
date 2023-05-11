<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateEdgeDriverVersionRequest extends Model
{
    /**
     * @description The Java Virtual Machine (JVM) startup parameter.
     *
     * @example -XX:+PrintGCDetails
     *
     * @var string
     */
    public $argument;

    /**
     * @description The rule for verifying configurations. Set this parameter to a JSON string in the following format:
     *
     * The JSON string contains the following parameters:
     *
     *   driverConfig: the rule for verifying the configuration of the driver when the driver is to be deployed in an edge instance.
     *   deviceConfig: the rule for verifying the configurations of devices that use the driver when the driver is to be deployed in an edge instance.
     *
     * `required`: A value of true indicates that the corresponding parameter is required. A value of false indicates that the corresponding parameter is optional.
     * @example {"deviceConfig":{"required":false},"driverConfig":{"required":false}}
     *
     * @var string
     */
    public $configCheckRule;

    /**
     * @description The configuration of the container where the driver runs. Set this parameter to a JSON string. For more information about parameters in the JSON string, see the following parameter description of ContainerConfig.
     *
     * @example {"privileged":1,"devMappings":[],"volumeMappings":[],"hostNetworkMode":0,"portMappings":[]}
     *
     * @var string
     */
    public $containerConfig;

    /**
     * @description The description of the driver. The description can be a maximum of 256 bytes in length.
     *
     * @var string
     */
    public $description;

    /**
     * @description The configuration of the driver. Set this parameter to a JSON string in the following format:
     *
     * The JSON string contains the following parameters:
     *
     *   format: the format of the driver configuration. Valid values: KV (key-value pair), JSON (JSON string), and FILE (configuration file).
     *
     *   content: the content of the driver configuration. If you set the format parameter to KV or JSON, set this parameter to the configuration content of the driver. If you set the format parameter to FILE, set this parameter to the URL of the driver configuration file stored in OSS.
     *
     * >To obtain the URL of the driver configuration file stored in OSS, call the [CreateOssPreSignedAddress](~~155858~~) operation.
     * @example [{"format":"JSON","content":"{\"defaultConfig\":\"this is default driver config demo\"}"}]
     *
     * @var string
     */
    public $driverConfig;

    /**
     * @description The ID of the driver. To obtain the driver ID, perform the following steps: Log on to the [Link IoT Edge console](https://iot.console.aliyun.com/le/instance/list). On the **Drivers** page, move the pointer over the name of the driver for which you want to update a driver version and obtain the driver ID.
     *
     * You can also call the [QueryEdgeDriver](~~155776~~) operation to query the driver ID.
     * @example fec565038d7544978d9aed5c1a******
     *
     * @var string
     */
    public $driverId;

    /**
     * @description The version number of the driver.
     *
     * @example 1.2.0
     *
     * @var string
     */
    public $driverVersion;

    /**
     * @description The earliest version of Link IoT Edge that is supported by the driver. The driver can run on gateways of only this version and later. For example, if you set this parameter to 2.4.0, the driver can run on gateways of only version 2.4.0 and later.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $edgeVersion;

    /**
     * @description The ID of the Internet of Things (IoT) service instance. This parameter is not required for the public instance but required for Enterprise Edition instances.
     *
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
     * @return UpdateEdgeDriverVersionRequest
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
