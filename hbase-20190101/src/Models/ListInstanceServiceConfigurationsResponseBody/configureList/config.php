<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\ListInstanceServiceConfigurationsResponseBody\configureList;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $runningValue;

    /**
     * @var string
     */
    public $configureUnit;

    /**
     * @var string
     */
    public $configureName;

    /**
     * @var string
     */
    public $valueRange;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $needRestart;
    protected $_name = [
        'description'   => 'Description',
        'runningValue'  => 'RunningValue',
        'configureUnit' => 'ConfigureUnit',
        'configureName' => 'ConfigureName',
        'valueRange'    => 'ValueRange',
        'defaultValue'  => 'DefaultValue',
        'needRestart'   => 'NeedRestart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->runningValue) {
            $res['RunningValue'] = $this->runningValue;
        }
        if (null !== $this->configureUnit) {
            $res['ConfigureUnit'] = $this->configureUnit;
        }
        if (null !== $this->configureName) {
            $res['ConfigureName'] = $this->configureName;
        }
        if (null !== $this->valueRange) {
            $res['ValueRange'] = $this->valueRange;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->needRestart) {
            $res['NeedRestart'] = $this->needRestart;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RunningValue'])) {
            $model->runningValue = $map['RunningValue'];
        }
        if (isset($map['ConfigureUnit'])) {
            $model->configureUnit = $map['ConfigureUnit'];
        }
        if (isset($map['ConfigureName'])) {
            $model->configureName = $map['ConfigureName'];
        }
        if (isset($map['ValueRange'])) {
            $model->valueRange = $map['ValueRange'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['NeedRestart'])) {
            $model->needRestart = $map['NeedRestart'];
        }

        return $model;
    }
}
