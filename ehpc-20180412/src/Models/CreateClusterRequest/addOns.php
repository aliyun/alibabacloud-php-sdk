<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class addOns extends Model
{
    /**
     * @description The path to the configuration file.
     *
     * @example /usr/local/addon/cromwell/cromwell.conf
     *
     * @var string
     */
    public $configFile;

    /**
     * @description The type of the database engine. Valid values: Mysql, and null.
     *
     * @example Mysql
     *
     * @var string
     */
    public $DBType;

    /**
     * @description Indicates whether to auto-start the custom component. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $defaultStart;

    /**
     * @description The deployment mode. Valid values: local and ecs.
     *
     * @example local
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The component name.
     *
     * @example cromwell
     *
     * @var string
     */
    public $name;

    /**
     * @description The access port of the custom component.
     *
     * @example 10000
     *
     * @var float
     */
    public $port;

    /**
     * @description The version number of the component.
     *
     * @example 85
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'configFile'   => 'ConfigFile',
        'DBType'       => 'DBType',
        'defaultStart' => 'DefaultStart',
        'deployMode'   => 'DeployMode',
        'name'         => 'Name',
        'port'         => 'Port',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configFile) {
            $res['ConfigFile'] = $this->configFile;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->defaultStart) {
            $res['DefaultStart'] = $this->defaultStart;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addOns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigFile'])) {
            $model->configFile = $map['ConfigFile'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DefaultStart'])) {
            $model->defaultStart = $map['DefaultStart'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
