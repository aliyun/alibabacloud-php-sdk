<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\ListClusterServiceConfigResponseBody\configList;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $needRestart;

    /**
     * @var string
     */
    public $runningValue;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $valueRange;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'description'  => 'Description',
        'name'         => 'Name',
        'needRestart'  => 'NeedRestart',
        'runningValue' => 'RunningValue',
        'unit'         => 'Unit',
        'valueRange'   => 'ValueRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->needRestart) {
            $res['NeedRestart'] = $this->needRestart;
        }
        if (null !== $this->runningValue) {
            $res['RunningValue'] = $this->runningValue;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NeedRestart'])) {
            $model->needRestart = $map['NeedRestart'];
        }
        if (isset($map['RunningValue'])) {
            $model->runningValue = $map['RunningValue'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['ValueRange'])) {
            $model->valueRange = $map['ValueRange'];
        }

        return $model;
    }
}
