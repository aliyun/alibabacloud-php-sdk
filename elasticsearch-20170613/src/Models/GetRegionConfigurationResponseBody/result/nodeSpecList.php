<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeSpecList extends Model
{
    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var int
     */
    public $disk;

    /**
     * @var string
     */
    public $specGroupType;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'memorySize'    => 'memorySize',
        'cpuCount'      => 'cpuCount',
        'diskType'      => 'diskType',
        'spec'          => 'spec',
        'disk'          => 'disk',
        'specGroupType' => 'specGroupType',
        'enable'        => 'enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memorySize) {
            $res['memorySize'] = $this->memorySize;
        }
        if (null !== $this->cpuCount) {
            $res['cpuCount'] = $this->cpuCount;
        }
        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->disk) {
            $res['disk'] = $this->disk;
        }
        if (null !== $this->specGroupType) {
            $res['specGroupType'] = $this->specGroupType;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
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
        if (isset($map['memorySize'])) {
            $model->memorySize = $map['memorySize'];
        }
        if (isset($map['cpuCount'])) {
            $model->cpuCount = $map['cpuCount'];
        }
        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }
        if (isset($map['disk'])) {
            $model->disk = $map['disk'];
        }
        if (isset($map['specGroupType'])) {
            $model->specGroupType = $map['specGroupType'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        return $model;
    }
}
