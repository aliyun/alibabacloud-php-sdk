<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest\dataSourceInfo;
use AlibabaCloud\Tea\Model;

class CreateIndexRequest extends Model
{
    /**
     * @var int
     */
    public $buildParallelNum;

    /**
     * @description The content of the index.
     *
     * @example {\\"summarys\\":{\\"summary_fields\\":[\\"id\\"]},\\"indexs\\":[{\\"index_name\\":\\"index_id\\",\\"index_type\\":\\"PRIMARYKEY64\\",\\"index_fields\\":\\"id\\",\\"has_primary_key_attribute\\":true,\\"is_primary_key_sorted\\":false}],\\"attributes\\":[\\"id\\"],\\"fields\\":[{\\"field_name\\":\\"id\\",\\"field_type\\":\\"UINT16\\"}],\\"table_name\\":\\"index_2\\"}
     *
     * @var string
     */
    public $content;

    /**
     * @description Optional. The data source, which can be MaxCompute, Message Service (MNS), Realtime Compute for Apache Flink, or StreamCompute.
     *
     * @example test1
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description The information about the data source, which is required for the new version of OpenSearch Vector Search Edition.
     *
     * @var dataSourceInfo
     */
    public $dataSourceInfo;

    /**
     * @description The data center in which the data source resides.
     *
     * @example vpc_hz_domain_1
     *
     * @var string
     */
    public $domain;

    /**
     * @description The extended configurations of the field. Keys such as vector and embedding are included. Vector indicates the vector field. Embedding indicates the field that requires embedding.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $extend;

    /**
     * @var int
     */
    public $mergeParallelNum;

    /**
     * @description The name of the index.
     *
     * @example ha-cn-zvp2qr1sk01_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description The data partition.
     *
     * @example 20211202
     *
     * @var int
     */
    public $partition;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'buildParallelNum' => 'buildParallelNum',
        'content'          => 'content',
        'dataSource'       => 'dataSource',
        'dataSourceInfo'   => 'dataSourceInfo',
        'domain'           => 'domain',
        'extend'           => 'extend',
        'mergeParallelNum' => 'mergeParallelNum',
        'name'             => 'name',
        'partition'        => 'partition',
        'dryRun'           => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildParallelNum) {
            $res['buildParallelNum'] = $this->buildParallelNum;
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
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->extend) {
            $res['extend'] = $this->extend;
        }
        if (null !== $this->mergeParallelNum) {
            $res['mergeParallelNum'] = $this->mergeParallelNum;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buildParallelNum'])) {
            $model->buildParallelNum = $map['buildParallelNum'];
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
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['extend'])) {
            $model->extend = $map['extend'];
        }
        if (isset($map['mergeParallelNum'])) {
            $model->mergeParallelNum = $map['mergeParallelNum'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
