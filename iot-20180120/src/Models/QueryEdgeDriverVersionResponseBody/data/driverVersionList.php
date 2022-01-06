<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverVersionResponseBody\data;

use AlibabaCloud\Tea\Model;

class driverVersionList extends Model
{
    /**
     * @var string
     */
    public $argument;

    /**
     * @var string
     */
    public $configCheckRule;

    /**
     * @var string
     */
    public $containerConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $driverConfig;

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
    public $edgeVersion;

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
    public $sourceConfig;

    /**
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
