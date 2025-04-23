<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexRequest\dataSourceInfo;

class ModifyIndexRequest extends Model
{
    /**
     * @var int
     */
    public $buildParallelNum;

    /**
     * @var mixed[][]
     */
    public $cluster;

    /**
     * @var string
     */
    public $clusterConfigName;

    /**
     * @var ConfigValue[]
     */
    public $config;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var dataSourceInfo
     */
    public $dataSourceInfo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var mixed[]
     */
    public $extend;

    /**
     * @var int
     */
    public $mergeParallelNum;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var string
     */
    public $pushMode;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'buildParallelNum' => 'buildParallelNum',
        'cluster' => 'cluster',
        'clusterConfigName' => 'clusterConfigName',
        'config' => 'config',
        'content' => 'content',
        'dataSource' => 'dataSource',
        'dataSourceInfo' => 'dataSourceInfo',
        'description' => 'description',
        'domain' => 'domain',
        'extend' => 'extend',
        'mergeParallelNum' => 'mergeParallelNum',
        'partition' => 'partition',
        'pushMode' => 'pushMode',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
        if (\is_array($this->cluster)) {
            Model::validateArray($this->cluster);
        }
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        if (null !== $this->dataSourceInfo) {
            $this->dataSourceInfo->validate();
        }
        if (\is_array($this->extend)) {
            Model::validateArray($this->extend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildParallelNum) {
            $res['buildParallelNum'] = $this->buildParallelNum;
        }

        if (null !== $this->cluster) {
            if (\is_array($this->cluster)) {
                $res['cluster'] = [];
                foreach ($this->cluster as $key1 => $value1) {
                    $res['cluster'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->clusterConfigName) {
            $res['clusterConfigName'] = $this->clusterConfigName;
        }

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->dataSource) {
            $res['dataSource'] = $this->dataSource;
        }

        if (null !== $this->dataSourceInfo) {
            $res['dataSourceInfo'] = null !== $this->dataSourceInfo ? $this->dataSourceInfo->toArray($noStream) : $this->dataSourceInfo;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->extend) {
            if (\is_array($this->extend)) {
                $res['extend'] = [];
                foreach ($this->extend as $key1 => $value1) {
                    $res['extend'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->mergeParallelNum) {
            $res['mergeParallelNum'] = $this->mergeParallelNum;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        if (null !== $this->pushMode) {
            $res['pushMode'] = $this->pushMode;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
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
        if (isset($map['buildParallelNum'])) {
            $model->buildParallelNum = $map['buildParallelNum'];
        }

        if (isset($map['cluster'])) {
            if (!empty($map['cluster'])) {
                $model->cluster = [];
                foreach ($map['cluster'] as $key1 => $value1) {
                    $model->cluster[$key1] = $value1;
                }
            }
        }

        if (isset($map['clusterConfigName'])) {
            $model->clusterConfigName = $map['clusterConfigName'];
        }

        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = ConfigValue::fromMap($value1);
                }
            }
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['dataSource'])) {
            $model->dataSource = $map['dataSource'];
        }

        if (isset($map['dataSourceInfo'])) {
            $model->dataSourceInfo = dataSourceInfo::fromMap($map['dataSourceInfo']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['extend'])) {
            if (!empty($map['extend'])) {
                $model->extend = [];
                foreach ($map['extend'] as $key1 => $value1) {
                    $model->extend[$key1] = $value1;
                }
            }
        }

        if (isset($map['mergeParallelNum'])) {
            $model->mergeParallelNum = $map['mergeParallelNum'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        if (isset($map['pushMode'])) {
            $model->pushMode = $map['pushMode'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
