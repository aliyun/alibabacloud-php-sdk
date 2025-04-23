<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexRequest\dataSourceInfo\config;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexRequest\dataSourceInfo\saroConfig;

class dataSourceInfo extends Model
{
    /**
     * @var bool
     */
    public $autoBuildIndex;

    /**
     * @var string
     */
    public $buildMode;

    /**
     * @var config
     */
    public $config;

    /**
     * @var int
     */
    public $dataTimeSec;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $generation;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossDataPath;

    /**
     * @var string
     */
    public $partition;

    /**
     * @var int
     */
    public $processParallelNum;

    /**
     * @var int
     */
    public $processPartitionCount;

    /**
     * @var saroConfig
     */
    public $saroConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'autoBuildIndex' => 'autoBuildIndex',
        'buildMode' => 'buildMode',
        'config' => 'config',
        'dataTimeSec' => 'dataTimeSec',
        'domain' => 'domain',
        'generation' => 'generation',
        'name' => 'name',
        'ossDataPath' => 'ossDataPath',
        'partition' => 'partition',
        'processParallelNum' => 'processParallelNum',
        'processPartitionCount' => 'processPartitionCount',
        'saroConfig' => 'saroConfig',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (null !== $this->saroConfig) {
            $this->saroConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoBuildIndex) {
            $res['autoBuildIndex'] = $this->autoBuildIndex;
        }

        if (null !== $this->buildMode) {
            $res['buildMode'] = $this->buildMode;
        }

        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->dataTimeSec) {
            $res['dataTimeSec'] = $this->dataTimeSec;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ossDataPath) {
            $res['ossDataPath'] = $this->ossDataPath;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        if (null !== $this->processParallelNum) {
            $res['processParallelNum'] = $this->processParallelNum;
        }

        if (null !== $this->processPartitionCount) {
            $res['processPartitionCount'] = $this->processPartitionCount;
        }

        if (null !== $this->saroConfig) {
            $res['saroConfig'] = null !== $this->saroConfig ? $this->saroConfig->toArray($noStream) : $this->saroConfig;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['autoBuildIndex'])) {
            $model->autoBuildIndex = $map['autoBuildIndex'];
        }

        if (isset($map['buildMode'])) {
            $model->buildMode = $map['buildMode'];
        }

        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['dataTimeSec'])) {
            $model->dataTimeSec = $map['dataTimeSec'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ossDataPath'])) {
            $model->ossDataPath = $map['ossDataPath'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        if (isset($map['processParallelNum'])) {
            $model->processParallelNum = $map['processParallelNum'];
        }

        if (isset($map['processPartitionCount'])) {
            $model->processPartitionCount = $map['processPartitionCount'];
        }

        if (isset($map['saroConfig'])) {
            $model->saroConfig = saroConfig::fromMap($map['saroConfig']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
