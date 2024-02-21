<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ResultSpecInfoMapValue extends Model
{
    /**
     * @var string
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $memorySize;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $specGroupType;

    /**
     * @var string
     */
    public $disk;

    /**
     * @var string
     */
    public $diskType;
    protected $_name = [
        'cpuCount'      => 'cpuCount',
        'memorySize'    => 'memorySize',
        'enable'        => 'enable',
        'spec'          => 'spec',
        'specGroupType' => 'specGroupType',
        'disk'          => 'disk',
        'diskType'      => 'diskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCount) {
            $res['cpuCount'] = $this->cpuCount;
        }
        if (null !== $this->memorySize) {
            $res['memorySize'] = $this->memorySize;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->specGroupType) {
            $res['specGroupType'] = $this->specGroupType;
        }
        if (null !== $this->disk) {
            $res['disk'] = $this->disk;
        }
        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResultSpecInfoMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpuCount'])) {
            $model->cpuCount = $map['cpuCount'];
        }
        if (isset($map['memorySize'])) {
            $model->memorySize = $map['memorySize'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }
        if (isset($map['specGroupType'])) {
            $model->specGroupType = $map['specGroupType'];
        }
        if (isset($map['disk'])) {
            $model->disk = $map['disk'];
        }
        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }

        return $model;
    }
}
