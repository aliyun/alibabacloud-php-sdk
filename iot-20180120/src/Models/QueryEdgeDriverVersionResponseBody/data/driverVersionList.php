<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverVersionResponseBody\data;

use AlibabaCloud\Tea\Model;

class driverVersionList extends Model
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
     * @description The rule for verifying configurations. The value is a JSON string in the following format:
     *
     * The JSON string contains the following parameters:
     *
     *   driverConfig: the rule for verifying the configuration of the driver when the driver is to be deployed in an edge instance.
     *   deviceConfig: the rule for verifying the configurations of devices that use the driver when the driver is to be deployed in an edge instance.
     *
     * @example {\"deviceConfig\":{\"required\":false},\"driverConfig\":{\"required\":false}}
     *
     * @var string
     */
    public $configCheckRule;

    /**
     * @description The configuration of the container where the driver runs. The value is a JSON string. For more information about parameters in the JSON string, see the following parameter description of ContainerConfig.
     *
     * @example {\"devMappings\":[],\"hostNetworkMode\":0,\"portMappings\":[],\"privileged\":1,\"volumeMappings\":[]}
     *
     * @var string
     */
    public $containerConfig;

    /**
     * @description The description of the driver.
     *
     * @var string
     */
    public $description;

    /**
     * @description The configuration of the driver. The value is a JSON string in the following format:
     *
     * The JSON string contains the following parameters:
     *
     *   format: the format of the driver configuration. Valid values: KV (key-value pair), JSON (JSON string), and FILE (configuration file).
     *   content: the content of the driver configuration. If the format parameter is set to KV or JSON, the value of this parameter is the configuration content. If the format parameter is set to FILE, the value of this parameter is the URL of the configuration file stored in Object Storage Service (OSS).
     *
     * @example [{\"content\":\"{\\\"defaultConfig\\\":\\\"this is default driver config demo\\\"}\",\"format\":\"JSON\"}]
     *
     * @var string
     */
    public $driverConfig;

    /**
     * @description The ID of the driver.
     *
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
     * @description The earliest version of Link IoT Edge that is supported by the driver.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $edgeVersion;

    /**
     * @description The UNIX timestamp when the driver was created.
     *
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @description The last UNIX timestamp when the driver was updated.
     *
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @example {\"ossAddress\":\"http://nova-scene-daily.oss-cn-shanghai.aliyuncs.com/driver/a8d6e4acc6941ecea8f0cfb3******\/ck3n3koe200003h6zf******.zip\",\"temporaryOssAddress\":\"http://nova-scene-daily.oss-cn-shanghai.aliyuncs.com/driver/a8d6e4acc6941ecea8f0cfb3******\/ck3n3koe200003h6zf******.zip?Expires\u003d1575******\u0026OSSAccessKeyId\u003daS4MT0IYr******\u0026Signature\u003dm6cpmcaB8rm3YfbkhTYgb0W******\"}
     *
     * @var string
     */
    public $sourceConfig;

    /**
     * @description The status of the driver version. Valid values:
     *
     *   0: The driver version was not published.
     *   1: The driver version was published.
     *
     * @example 0
     *
     * @var string
     */
    public $versionState;
    protected $_name = [
        'argument'             => 'Argument',
        'configCheckRule'      => 'ConfigCheckRule',
        'containerConfig'      => 'ContainerConfig',
        'description'          => 'Description',
        'driverConfig'         => 'DriverConfig',
        'driverId'             => 'DriverId',
        'driverVersion'        => 'DriverVersion',
        'edgeVersion'          => 'EdgeVersion',
        'gmtCreateTimestamp'   => 'GmtCreateTimestamp',
        'gmtModifiedTimestamp' => 'GmtModifiedTimestamp',
        'sourceConfig'         => 'SourceConfig',
        'versionState'         => 'VersionState',
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
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->sourceConfig) {
            $res['SourceConfig'] = $this->sourceConfig;
        }
        if (null !== $this->versionState) {
            $res['VersionState'] = $this->versionState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return driverVersionList
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
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['SourceConfig'])) {
            $model->sourceConfig = $map['SourceConfig'];
        }
        if (isset($map['VersionState'])) {
            $model->versionState = $map['VersionState'];
        }

        return $model;
    }
}
