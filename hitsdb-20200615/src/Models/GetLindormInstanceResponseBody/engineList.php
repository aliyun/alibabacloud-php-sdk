<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class engineList extends Model
{
    /**
     * @var string
     */
    public $coreCount;

    /**
     * @var string
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var bool
     */
    public $isLastVersion;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $memorySize;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'coreCount'     => 'CoreCount',
        'cpuCount'      => 'CpuCount',
        'engine'        => 'Engine',
        'isLastVersion' => 'IsLastVersion',
        'latestVersion' => 'LatestVersion',
        'memorySize'    => 'MemorySize',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreCount) {
            $res['CoreCount'] = $this->coreCount;
        }
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->isLastVersion) {
            $res['IsLastVersion'] = $this->isLastVersion;
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CoreCount'])) {
            $model->coreCount = $map['CoreCount'];
        }
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['IsLastVersion'])) {
            $model->isLastVersion = $map['IsLastVersion'];
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
