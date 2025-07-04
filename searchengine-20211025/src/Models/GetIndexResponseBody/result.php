<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponseBody\result\dataSourceInfo;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponseBody\result\versions;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ResultClusterValue;

class result extends Model
{
    /**
     * @var ResultClusterValue[]
     */
    public $cluster;

    /**
     * @var mixed[][]
     */
    public $config;

    /**
     * @var mixed[][]
     */
    public $configWhenBuild;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createTime;

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
     * @var string[][]
     */
    public $extend;

    /**
     * @var string
     */
    public $fullUpdateTime;

    /**
     * @var int
     */
    public $fullVersion;

    /**
     * @var string
     */
    public $incUpdateTime;

    /**
     * @var int
     */
    public $indexSize;

    /**
     * @var string
     */
    public $indexStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'cluster' => 'cluster',
        'config' => 'config',
        'configWhenBuild' => 'configWhenBuild',
        'content' => 'content',
        'createTime' => 'createTime',
        'dataSource' => 'dataSource',
        'dataSourceInfo' => 'dataSourceInfo',
        'description' => 'description',
        'domain' => 'domain',
        'extend' => 'extend',
        'fullUpdateTime' => 'fullUpdateTime',
        'fullVersion' => 'fullVersion',
        'incUpdateTime' => 'incUpdateTime',
        'indexSize' => 'indexSize',
        'indexStatus' => 'indexStatus',
        'name' => 'name',
        'partition' => 'partition',
        'updateTime' => 'updateTime',
        'versions' => 'versions',
    ];

    public function validate()
    {
        if (\is_array($this->cluster)) {
            Model::validateArray($this->cluster);
        }
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        if (\is_array($this->configWhenBuild)) {
            Model::validateArray($this->configWhenBuild);
        }
        if (null !== $this->dataSourceInfo) {
            $this->dataSourceInfo->validate();
        }
        if (\is_array($this->extend)) {
            Model::validateArray($this->extend);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cluster) {
            if (\is_array($this->cluster)) {
                $res['cluster'] = [];
                foreach ($this->cluster as $key1 => $value1) {
                    $res['cluster'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->configWhenBuild) {
            if (\is_array($this->configWhenBuild)) {
                $res['configWhenBuild'] = [];
                foreach ($this->configWhenBuild as $key1 => $value1) {
                    $res['configWhenBuild'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
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
                    if (\is_array($value1)) {
                        $res['extend'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['extend'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->fullUpdateTime) {
            $res['fullUpdateTime'] = $this->fullUpdateTime;
        }

        if (null !== $this->fullVersion) {
            $res['fullVersion'] = $this->fullVersion;
        }

        if (null !== $this->incUpdateTime) {
            $res['incUpdateTime'] = $this->incUpdateTime;
        }

        if (null !== $this->indexSize) {
            $res['indexSize'] = $this->indexSize;
        }

        if (null !== $this->indexStatus) {
            $res['indexStatus'] = $this->indexStatus;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['cluster'])) {
            if (!empty($map['cluster'])) {
                $model->cluster = [];
                foreach ($map['cluster'] as $key1 => $value1) {
                    $model->cluster[$key1] = ResultClusterValue::fromMap($value1);
                }
            }
        }

        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['configWhenBuild'])) {
            if (!empty($map['configWhenBuild'])) {
                $model->configWhenBuild = [];
                foreach ($map['configWhenBuild'] as $key1 => $value1) {
                    $model->configWhenBuild[$key1] = $value1;
                }
            }
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
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
                    if (!empty($value1)) {
                        $model->extend[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->extend[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['fullUpdateTime'])) {
            $model->fullUpdateTime = $map['fullUpdateTime'];
        }

        if (isset($map['fullVersion'])) {
            $model->fullVersion = $map['fullVersion'];
        }

        if (isset($map['incUpdateTime'])) {
            $model->incUpdateTime = $map['incUpdateTime'];
        }

        if (isset($map['indexSize'])) {
            $model->indexSize = $map['indexSize'];
        }

        if (isset($map['indexStatus'])) {
            $model->indexStatus = $map['indexStatus'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1] = versions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
