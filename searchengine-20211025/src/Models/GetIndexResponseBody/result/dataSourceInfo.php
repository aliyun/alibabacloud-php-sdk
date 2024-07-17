<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponseBody\result\dataSourceInfo\config;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponseBody\result\dataSourceInfo\saroConfig;
use AlibabaCloud\Tea\Model;

class dataSourceInfo extends Model
{
    /**
     * @description Indicates whether the automatic full indexing feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $autoBuildIndex;

    /**
     * @description The configuration of MaxCompute data sources.
     *
     * @var config
     */
    public $config;

    /**
     * @description The data center in which the data source is deployed.
     *
     * @example vpc_hz_domain_1
     *
     * @var string
     */
    public $domain;

    /**
     * @description The name of the data source.
     *
     * @example ha-cn-pl32rf0****_test_api
     *
     * @var string
     */
    public $name;

    /**
     * @description The maximum number of full indexes that can be concurrently processed.
     *
     * @example 2
     *
     * @var int
     */
    public $processParallelNum;

    /**
     * @description The number of resources used for data update.
     *
     * @example 2
     *
     * @var int
     */
    public $processPartitionCount;

    /**
     * @description The configurations of the SARO data source.
     *
     * @var saroConfig
     */
    public $saroConfig;

    /**
     * @description The type of the data source. Valid values: odps, swift, saro, oss, and unKnow.
     *
     * @example odps
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoBuildIndex'        => 'autoBuildIndex',
        'config'                => 'config',
        'domain'                => 'domain',
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
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toMap() : null;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
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
