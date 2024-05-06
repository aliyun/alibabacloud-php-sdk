<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest\dataSourceInfo\config;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest\dataSourceInfo\saroConfig;
use AlibabaCloud\Tea\Model;

class dataSourceInfo extends Model
{
    /**
     * @description Specifies whether to enable the automatic full indexing feature.
     *
     * @example true
     *
     * @var bool
     */
    public $autoBuildIndex;

    /**
     * @description The information about the MaxCompute data source.
     *
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
     * @description The data center where the data source is deployed.
     *
     * @example vpc_hz_domain_1
     *
     * @var string
     */
    public $domain;

    /**
     * @description The name of the index.
     *
     * @example ha-cn-35t3n1yuj0d_index_1
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of resources used for data update.
     *
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
     * @description The type of the data source. Valid values: odps, swift, saro, and oss.
     *
     * @example odps
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoBuildIndex'        => 'autoBuildIndex',
        'config'                => 'config',
        'dataTimeSec'           => 'dataTimeSec',
        'domain'                => 'domain',
        'name'                  => 'name',
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
        if (null !== $this->dataTimeSec) {
            $res['dataTimeSec'] = $this->dataTimeSec;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['dataTimeSec'])) {
            $model->dataTimeSec = $map['dataTimeSec'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
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
