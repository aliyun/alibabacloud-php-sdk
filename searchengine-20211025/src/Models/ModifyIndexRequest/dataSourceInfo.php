<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexRequest;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexRequest\dataSourceInfo\config;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexRequest\dataSourceInfo\saroConfig;
use AlibabaCloud\Tea\Model;

class dataSourceInfo extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoBuildIndex;

    /**
     * @example api
     *
     * @var string
     */
    public $buildMode;

    /**
     * @var config
     */
    public $config;

    /**
     * @example 1709715164
     *
     * @var int
     */
    public $dataTimeSec;

    /**
     * @example vpc_hz_domain_1
     *
     * @var string
     */
    public $domain;

    /**
     * @example 4
     *
     * @var int
     */
    public $generation;

    /**
     * @example ha-cn-35t3n1yuj0d_index_1
     *
     * @var string
     */
    public $name;

    /**
     * @example 2
     *
     * @var int
     */
    public $processParallelNum;

    /**
     * @example 4
     *
     * @var int
     */
    public $processPartitionCount;

    /**
     * @var saroConfig
     */
    public $saroConfig;

    /**
     * @example odps
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoBuildIndex'        => 'autoBuildIndex',
        'buildMode'             => 'buildMode',
        'config'                => 'config',
        'dataTimeSec'           => 'dataTimeSec',
        'domain'                => 'domain',
        'generation'            => 'generation',
        'name'                  => 'name',
        'processParallelNum'    => 'processParallelNum',
        'processPartitionCount' => 'processPartitionCount',
        'saroConfig'            => 'saroConfig',
        'type'                  => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoBuildIndex) {
            $res['autoBuildIndex'] = $this->autoBuildIndex;
        }
        if (null !== $this->buildMode) {
            $res['buildMode'] = $this->buildMode;
        }
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toMap() : null;
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
        if (null !== $this->processParallelNum) {
            $res['processParallelNum'] = $this->processParallelNum;
        }
        if (null !== $this->processPartitionCount) {
            $res['processPartitionCount'] = $this->processPartitionCount;
        }
        if (null !== $this->saroConfig) {
            $res['saroConfig'] = null !== $this->saroConfig ? $this->saroConfig->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceInfo
     */
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
