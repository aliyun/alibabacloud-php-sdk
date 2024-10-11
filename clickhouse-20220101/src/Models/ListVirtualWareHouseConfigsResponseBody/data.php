<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\ListVirtualWareHouseConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example keep_alive_timeout
     *
     * @var string
     */
    public $configFullPath;

    /**
     * @example config.xml
     *
     * @var string
     */
    public $configType;

    /**
     * @example 300
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example The number of seconds that ClickHouse HTTP server waits for incoming requests before closing the connection
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $needRestart;

    /**
     * @example >=10
     *
     * @var string
     */
    public $spec;

    /**
     * @example 300
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'configFullPath' => 'ConfigFullPath',
        'configType'     => 'ConfigType',
        'defaultValue'   => 'DefaultValue',
        'description'    => 'Description',
        'needRestart'    => 'NeedRestart',
        'spec'           => 'Spec',
        'value'          => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configFullPath) {
            $res['ConfigFullPath'] = $this->configFullPath;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->needRestart) {
            $res['NeedRestart'] = $this->needRestart;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['ConfigFullPath'])) {
            $model->configFullPath = $map['ConfigFullPath'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NeedRestart'])) {
            $model->needRestart = $map['NeedRestart'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
