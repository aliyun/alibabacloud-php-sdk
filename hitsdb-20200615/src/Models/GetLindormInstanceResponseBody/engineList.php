<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class engineList extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $coreCount;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $memorySize;

    /**
     * @var bool
     */
    public $isLastVersion;
    protected $_name = [
        'version'       => 'Version',
        'cpuCount'      => 'CpuCount',
        'coreCount'     => 'CoreCount',
        'engine'        => 'Engine',
        'memorySize'    => 'MemorySize',
        'isLastVersion' => 'IsLastVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }
        if (null !== $this->coreCount) {
            $res['CoreCount'] = $this->coreCount;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->isLastVersion) {
            $res['IsLastVersion'] = $this->isLastVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return engineList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }
        if (isset($map['CoreCount'])) {
            $model->coreCount = $map['CoreCount'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['IsLastVersion'])) {
            $model->isLastVersion = $map['IsLastVersion'];
        }

        return $model;
    }
}
