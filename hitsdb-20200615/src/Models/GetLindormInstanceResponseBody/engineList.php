<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class engineList extends Model
{
    /**
     * @var string
     */
    public $arbiterCoreCount;

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
    public $primaryCoreCount;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $standbyCoreCount;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'arbiterCoreCount' => 'ArbiterCoreCount',
        'coreCount' => 'CoreCount',
        'cpuCount' => 'CpuCount',
        'engine' => 'Engine',
        'isLastVersion' => 'IsLastVersion',
        'latestVersion' => 'LatestVersion',
        'memorySize' => 'MemorySize',
        'primaryCoreCount' => 'PrimaryCoreCount',
        'specification' => 'Specification',
        'standbyCoreCount' => 'StandbyCoreCount',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arbiterCoreCount) {
            $res['ArbiterCoreCount'] = $this->arbiterCoreCount;
        }

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

        if (null !== $this->primaryCoreCount) {
            $res['PrimaryCoreCount'] = $this->primaryCoreCount;
        }

        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }

        if (null !== $this->standbyCoreCount) {
            $res['StandbyCoreCount'] = $this->standbyCoreCount;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArbiterCoreCount'])) {
            $model->arbiterCoreCount = $map['ArbiterCoreCount'];
        }

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

        if (isset($map['PrimaryCoreCount'])) {
            $model->primaryCoreCount = $map['PrimaryCoreCount'];
        }

        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        if (isset($map['StandbyCoreCount'])) {
            $model->standbyCoreCount = $map['StandbyCoreCount'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
