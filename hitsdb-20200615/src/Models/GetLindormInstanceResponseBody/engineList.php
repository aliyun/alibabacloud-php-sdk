<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class engineList extends Model
{
    /**
     * @description The number of engine nodes.
     *
     * @example 2
     *
     * @var string
     */
    public $coreCount;

    /**
     * @description The number of CPU cores on the engine node.
     *
     * @example 4
     *
     * @var string
     */
    public $cpuCount;

    /**
     * @description The engine type. Valid values:
     *
     *   **lindorm**: LindormTable.
     *   **tsdb**: LindormTSDB.
     *   **solr**: LindormSearch.
     *   **store**: LindormDFS.
     *   **bds** :Lindorm Tunnel Service (LTS).
     *   **compute**: Lindorm Distributed Processing System (LDPS).
     *
     * @example lindorm
     *
     * @var string
     */
    public $engine;

    /**
     * @description Indicates whether the version of the engine is the latest. Valid values:
     *
     *   **true**: The version of the engine is the latest.
     *   **false**: The version of the engine is not the latest.
     *
     * @example false
     *
     * @var bool
     */
    public $isLastVersion;

    /**
     * @description The latest version number of the engine.
     *
     * @example 2.2.19.2
     *
     * @var string
     */
    public $latestVersion;

    /**
     * @description The memory size of the engine nodes
     *
     * @example 8GB
     *
     * @var string
     */
    public $memorySize;

    /**
     * @description The version of the engine.
     *
     * @example 2.2.3
     *
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
