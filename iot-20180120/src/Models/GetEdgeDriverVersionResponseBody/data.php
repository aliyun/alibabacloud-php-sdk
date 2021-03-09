<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeDriverVersionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $driverId;

    /**
     * @var string
     */
    public $driverVersion;

    /**
     * @var string
     */
    public $versionState;

    /**
     * @var string
     */
    public $edgeVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $sourceConfig;

    /**
     * @var string
     */
    public $driverConfig;

    /**
     * @var string
     */
    public $containerConfig;

    /**
     * @var string
     */
    public $configCheckRule;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @var string
     */
    public $argument;
    protected $_name = [
        'driverId'             => 'DriverId',
        'driverVersion'        => 'DriverVersion',
        'versionState'         => 'VersionState',
        'edgeVersion'          => 'EdgeVersion',
        'description'          => 'Description',
        'sourceConfig'         => 'SourceConfig',
        'driverConfig'         => 'DriverConfig',
        'containerConfig'      => 'ContainerConfig',
        'configCheckRule'      => 'ConfigCheckRule',
        'gmtCreateTimestamp'   => 'GmtCreateTimestamp',
        'gmtModifiedTimestamp' => 'GmtModifiedTimestamp',
        'argument'             => 'Argument',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }
        if (null !== $this->driverVersion) {
            $res['DriverVersion'] = $this->driverVersion;
        }
        if (null !== $this->versionState) {
            $res['VersionState'] = $this->versionState;
        }
        if (null !== $this->edgeVersion) {
            $res['EdgeVersion'] = $this->edgeVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->sourceConfig) {
            $res['SourceConfig'] = $this->sourceConfig;
        }
        if (null !== $this->driverConfig) {
            $res['DriverConfig'] = $this->driverConfig;
        }
        if (null !== $this->containerConfig) {
            $res['ContainerConfig'] = $this->containerConfig;
        }
        if (null !== $this->configCheckRule) {
            $res['ConfigCheckRule'] = $this->configCheckRule;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->argument) {
            $res['Argument'] = $this->argument;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['DriverVersion'])) {
            $model->driverVersion = $map['DriverVersion'];
        }
        if (isset($map['VersionState'])) {
            $model->versionState = $map['VersionState'];
        }
        if (isset($map['EdgeVersion'])) {
            $model->edgeVersion = $map['EdgeVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SourceConfig'])) {
            $model->sourceConfig = $map['SourceConfig'];
        }
        if (isset($map['DriverConfig'])) {
            $model->driverConfig = $map['DriverConfig'];
        }
        if (isset($map['ContainerConfig'])) {
            $model->containerConfig = $map['ContainerConfig'];
        }
        if (isset($map['ConfigCheckRule'])) {
            $model->configCheckRule = $map['ConfigCheckRule'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['Argument'])) {
            $model->argument = $map['Argument'];
        }

        return $model;
    }
}
