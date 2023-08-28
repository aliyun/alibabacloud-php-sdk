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
     * @description The offline deployment name of the data source.
     *
     * @var string
     */
    public $domain;

    /**
     * @description The name of the data source.
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of resources used for data update.
     *
     * @var int
     */
    public $processPartitionCount;

    /**
     * @description The configuration of SARO data sources.
     *
     * @var saroConfig
     */
    public $saroConfig;

    /**
     * @description The type of the data source. Valid values: odps, swift, saro, oss, and unKnow.
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoBuildIndex'        => 'autoBuildIndex',
        'config'                => 'config',
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
