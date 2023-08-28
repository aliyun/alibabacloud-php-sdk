<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody\result\dataSourceInfo;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody\result\versions;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The content of the index.
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
     * @description The information about the data source.
     *
     * @var dataSourceInfo
     */
    public $dataSourceInfo;

    /**
     * @description The remarks.
     *
     * @var string
     */
    public $description;

    /**
     * @description The deployment name of the index.
     *
     * @example test
     *
     * @var string
     */
    public $domain;

    /**
     * @description The last time when full data in the index was updated.
     *
     * @var string
     */
    public $fullUpdateTime;

    /**
     * @description The version of the data.
     *
     * @var int
     */
    public $fullVersion;

    /**
     * @description The last time when incremental data in the index was updated.
     *
     * @var string
     */
    public $incUpdateTime;

    /**
     * @description The index size.
     *
     * @var int
     */
    public $indexSize;

    /**
     * @description The status of the index. Valid values: NEW and PUBLISH.
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
     * @description The number of shards.
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
