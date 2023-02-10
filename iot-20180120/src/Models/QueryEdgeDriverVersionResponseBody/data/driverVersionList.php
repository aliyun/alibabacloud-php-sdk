<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverVersionResponseBody\data;

use AlibabaCloud\Tea\Model;

class driverVersionList extends Model
{
    /**
     * @example -XX:+PrintGCDetails
     *
     * @var string
     */
    public $argument;

    /**
     * @example {\"deviceConfig\":{\"required\":false},\"driverConfig\":{\"required\":false}}
     *
     * @var string
     */
    public $configCheckRule;

    /**
     * @example {\"devMappings\":[],\"hostNetworkMode\":0,\"portMappings\":[],\"privileged\":1,\"volumeMappings\":[]}
     *
     * @var string
     */
    public $containerConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @example [{\"content\":\"{\\\"defaultConfig\\\":\\\"this is default driver config demo\\\"}\",\"format\":\"JSON\"}]
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
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
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
