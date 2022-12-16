<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeSpecList extends Model
{
    /**
     * @example 16
     *
     * @var int
     */
    public $cpuCount;

    /**
     * @example 44000
     *
     * @var int
     */
    public $disk;

    /**
     * @example local_efficiency
     *
     * @var string
     */
    public $diskType;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 64
     *
     * @var int
     */
    public $memorySize;

    /**
     * @example elasticsearch.sn2ne.large
     *
     * @var string
     */
    public $spec;

    /**
     * @example local_efficiency
     *
     * @var string
     */
    public $specGroupType;
    protected $_name = [
        'cpuCount'      => 'cpuCount',
        'disk'          => 'disk',
        'diskType'      => 'diskType',
        'enable'        => 'enable',
        'memorySize'    => 'memorySize',
        'spec'          => 'spec',
        'specGroupType' => 'specGroupType',
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
        if (null !== $this->disk) {
            $res['disk'] = $this->disk;
        }
        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->memorySize) {
            $res['memorySize'] = $this->memorySize;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->specGroupType) {
            $res['specGroupType'] = $this->specGroupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeSpecList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpuCount'])) {
            $model->cpuCount = $map['cpuCount'];
        }
        if (isset($map['disk'])) {
            $model->disk = $map['disk'];
        }
        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['memorySize'])) {
            $model->memorySize = $map['memorySize'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }
        if (isset($map['specGroupType'])) {
            $model->specGroupType = $map['specGroupType'];
        }

        return $model;
    }
}
