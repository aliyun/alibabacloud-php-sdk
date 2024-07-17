<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponseBody\result\dataSourceInfo;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponseBody\result\versions;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ResultClusterValue;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The cluster information.
     *
     * @var ResultClusterValue[]
     */
    public $cluster;

    /**
     * @description The configuration information.
     *
     * @var mixed[][]
     */
    public $config;

    /**
     * @description The configuration that takes effect next time.
     *
     * @var mixed[][]
     */
    public $configWhenBuild;

    /**
     * @description The file content.
     *
     * @example {"summarys":{"parameter":{"file_compressor":"zstd"},"summary_fields":["id"]},"file_compress":[{"name":"file_compressor","type":"zstd"},{"name":"no_compressor","type":""}],"indexs":[{"index_fields":"name","index_name":"ids","index_type":"STRING"},{"has_primary_key_attribute":true,"index_fields":"id","is_primary_key_sorted":false,"index_name":"id","index_type":"PRIMARYKEY64"}],"attributes":[{"file_compress":"no_compressor","field_name":"id"}],"fields":[{"user_defined_param":{},"compress_type":"uniq","field_type":"STRING","field_name":"id"},{"compress_type":"uniq","field_type":"STRING","field_name":"name"}],"table_name":"api"}
     *
     * @var string
     */
    public $content;

    /**
     * @description The name of the data source.
     *
     * @example ha-cn-tl32nd2nq01_00
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description The information about the data source.
     *
     * @var dataSourceInfo
     */
    public $dataSourceInfo;

    /**
     * @description The description of the index version.
     *
     * @example test index
     *
     * @var string
     */
    public $description;

    /**
     * @description The deployment name of the index.
     *
     * @example sz_vpc_domain_1
     *
     * @var string
     */
    public $domain;

    /**
     * @description The time when full data in the index was last updated.
     *
     * @example 2024-06-20 08:52:54
     *
     * @var string
     */
    public $fullUpdateTime;

    /**
     * @description The data version.
     *
     * @example 1688523414
     *
     * @var int
     */
    public $fullVersion;

    /**
     * @description The time when incremental data in the index was last updated.
     *
     * @example 2024-06-20 08:52:54
     *
     * @var string
     */
    public $incUpdateTime;

    /**
     * @description The index size.
     *
     * @example 4689
     *
     * @var int
     */
    public $indexSize;

    /**
     * @description The status of the index version. Valid values:
     *
     *   NEW: The index version is created.
     *   PUBLISH: The index version is normal.
     *   IN_USE: The index version is in use.
     *   NOT_USE: The index version is not used.
     *   STOP_USE: The index version is being stopped.
     *   RESTORE_USE: The index version is being restored.
     *   FAIL: The index version failed to be created.
     *
     * @example IN_USE
     *
     * @var string
     */
    public $indexStatus;

    /**
     * @description The index name.
     *
     * @example general
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of shards.
     *
     * @example 2
     *
     * @var int
     */
    public $partition;

    /**
     * @description The information about the versions.
     *
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'cluster'         => 'cluster',
        'config'          => 'config',
        'configWhenBuild' => 'configWhenBuild',
        'content'         => 'content',
        'dataSource'      => 'dataSource',
        'dataSourceInfo'  => 'dataSourceInfo',
        'description'     => 'description',
        'domain'          => 'domain',
        'fullUpdateTime'  => 'fullUpdateTime',
        'fullVersion'     => 'fullVersion',
        'incUpdateTime'   => 'incUpdateTime',
        'indexSize'       => 'indexSize',
        'indexStatus'     => 'indexStatus',
        'name'            => 'name',
        'partition'       => 'partition',
        'versions'        => 'versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['cluster'] = [];
            if (null !== $this->cluster && \is_array($this->cluster)) {
                foreach ($this->cluster as $key => $val) {
                    $res['cluster'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->configWhenBuild) {
            $res['configWhenBuild'] = $this->configWhenBuild;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->dataSource) {
            $res['dataSource'] = $this->dataSource;
        }
        if (null !== $this->dataSourceInfo) {
            $res['dataSourceInfo'] = null !== $this->dataSourceInfo ? $this->dataSourceInfo->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
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
        if (null !== $this->versions) {
            $res['versions'] = [];
            if (null !== $this->versions && \is_array($this->versions)) {
                $n = 0;
                foreach ($this->versions as $item) {
                    $res['versions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['configWhenBuild'])) {
            $model->configWhenBuild = $map['configWhenBuild'];
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
        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n               = 0;
                foreach ($map['versions'] as $item) {
                    $model->versions[$n++] = null !== $item ? versions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
