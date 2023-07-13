<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class addOns extends Model
{
    /**
     * @var string
     */
    public $configFile;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var bool
     */
    public $defaultStart;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $port;

    /**
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
