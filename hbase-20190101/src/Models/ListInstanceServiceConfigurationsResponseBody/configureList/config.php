<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\ListInstanceServiceConfigurationsResponseBody\configureList;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @example hbase#hbase-site.xml#hbase.client.keyvalue.maxsize
     *
     * @var string
     */
    public $configureName;

    /**
     * @example INT
     *
     * @var string
     */
    public $configureUnit;

    /**
     * @example 10485760
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example hbase client keyvalue maxsize
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var string
     */
    public $needRestart;

    /**
     * @example 10485760
     *
     * @var string
     */
    public $runningValue;

    /**
     * @example R[10485760,52428800]
     *
     * @var string
     */
    public $valueRange;
    protected $_name = [
        'configureName' => 'ConfigureName',
        'configureUnit' => 'ConfigureUnit',
        'defaultValue'  => 'DefaultValue',
        'description'   => 'Description',
        'needRestart'   => 'NeedRestart',
        'runningValue'  => 'RunningValue',
        'valueRange'    => 'ValueRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configureName) {
            $res['ConfigureName'] = $this->configureName;
        }
        if (null !== $this->configureUnit) {
            $res['ConfigureUnit'] = $this->configureUnit;
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
        if (null !== $this->runningValue) {
            $res['RunningValue'] = $this->runningValue;
        }
        if (null !== $this->valueRange) {
            $res['ValueRange'] = $this->valueRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigureName'])) {
            $model->configureName = $map['ConfigureName'];
        }
        if (isset($map['ConfigureUnit'])) {
            $model->configureUnit = $map['ConfigureUnit'];
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
        if (isset($map['RunningValue'])) {
            $model->runningValue = $map['RunningValue'];
        }
        if (isset($map['ValueRange'])) {
            $model->valueRange = $map['ValueRange'];
        }

        return $model;
    }
}
