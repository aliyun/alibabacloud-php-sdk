<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest\dataSourceInfo\config;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest\dataSourceInfo\saroConfig;

class dataSourceInfo extends Model
{
    /**
     * @var bool
     */
    public $autoBuildIndex;

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
     * @var string
     */
    public $name;

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
        'config' => 'config',
        'dataTimeSec' => 'dataTimeSec',
        'domain' => 'domain',
        'name' => 'name',
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

        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->dataTimeSec) {
            $res['dataTimeSec'] = $this->dataTimeSec;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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

        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['dataTimeSec'])) {
            $model->dataTimeSec = $map['dataTimeSec'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
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
