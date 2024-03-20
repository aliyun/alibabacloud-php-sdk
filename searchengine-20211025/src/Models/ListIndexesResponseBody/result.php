<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody\result\dataSourceInfo;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody\result\versions;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description schema JSON
     *
     * @example {"summarys":{"parameter":{"file_compressor":"zstd"},"summary_fields":["id"]},"file_compress":[{"name":"file_compressor","type":"zstd"},{"name":"no_compressor","type":""}],"indexs":[{"index_fields":"name","index_name":"ids","index_type":"STRING"},{"has_primary_key_attribute":true,"index_fields":"id","is_primary_key_sorted":false,"index_name":"id","index_type":"PRIMARYKEY64"}],"attributes":[{"file_compress":"no_compressor","field_name":"id"}],"fields":[{"user_defined_param":{},"compress_type":"uniq","field_type":"STRING","field_name":"id"},{"compress_type":"uniq","field_type":"STRING","field_name":"name"}],"table_name":"api"}
     *
     * @var string
     */
    public $content;

    /**
     * @description The data source.
     *
     * @example ha-cn-7mz2kvu2c01_table4
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description 数据源相关信息
     *
     * @var dataSourceInfo
     */
    public $dataSourceInfo;

    /**
     * @description 备注
     *
     * @example 备注
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the data center where the data source is deployed.
     *
     * @example test
     *
     * @var string
     */
    public $domain;

    /**
     * @description 全量切换时间
     *
     * @example 2023-07-05 10:40:38
     *
     * @var string
     */
    public $fullUpdateTime;

    /**
     * @description 全量版本  即：索引版本
     *
     * @example 1688523414
     *
     * @var int
     */
    public $fullVersion;

    /**
     * @description 增量更新时间
     *
     * @example 2023-07-05 10:58:33
     *
     * @var string
     */
    public $incUpdateTime;

    /**
     * @description 索引大小
     *
     * @example 4689
     *
     * @var int
     */
    public $indexSize;

    /**
     * @description NEW, PUBLISH
     *
     * @example " "
     *
     * @var string
     */
    public $indexStatus;

    /**
     * @description The name of the index.
     *
     * @example general
     *
     * @var string
     */
    public $name;

    /**
     * @description 数据分片
     *
     * @example 2
     *
     * @var int
     */
    public $partition;

    /**
     * @description The list of version information.
     *
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'content'        => 'content',
        'dataSource'     => 'dataSource',
        'dataSourceInfo' => 'dataSourceInfo',
        'description'    => 'description',
        'domain'         => 'domain',
        'fullUpdateTime' => 'fullUpdateTime',
        'fullVersion'    => 'fullVersion',
        'incUpdateTime'  => 'incUpdateTime',
        'indexSize'      => 'indexSize',
        'indexStatus'    => 'indexStatus',
        'name'           => 'name',
        'partition'      => 'partition',
        'versions'       => 'versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
