<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody\result\dataSourceInfo\config;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody\result\dataSourceInfo\saroConfig;
use AlibabaCloud\Tea\Model;

class dataSourceInfo extends Model
{
    /**
     * @description 是否开启自动全量
     *
     * @example true
     *
     * @var bool
     */
    public $autoBuildIndex;

    /**
     * @description odps 数据源配置
     *
     * @var config
     */
    public $config;

    /**
     * @description 离线部署
     *
     * @example test
     *
     * @var string
     */
    public $domain;

    /**
     * @description 数据源名
     *
     * @example index1
     *
     * @var string
     */
    public $name;

    /**
     * @description 数据更新资源数
     *
     * @example 2
     *
     * @var int
     */
    public $processPartitionCount;

    /**
     * @description saro数据源配置
     *
     * @var saroConfig
     */
    public $saroConfig;

    /**
     * @description 数据源类型 (odps, swift, saro, oss, unKnow)
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
