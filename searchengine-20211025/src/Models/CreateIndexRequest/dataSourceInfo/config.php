<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest\dataSourceInfo;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The AccessKey ID of the MaxCompute data source.
     *
     * @example L***p
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The AccessKey secret of the MaxCompute data source.
     *
     * @example 5**9a6
     *
     * @var string
     */
    public $accessSecret;

    /**
     * @description The name of the OSS bucket.
     *
     * @example test-bucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $database;

    /**
     * @description The endpoint of the MaxCompute or Object Storage Service (OSS) data source.
     *
     * @example https://oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The namespace name.
     *
     * @example test-namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The path of the OSS object.
     *
     * @example /opensearch/oss.json
     *
     * @var string
     */
    public $ossPath;

    /**
     * @description The partition in the MaxCompute table. This parameter is required if type is set to odps.
     *
     * @example ds=20230114
     *
     * @var string
     */
    public $partition;

    /**
     * @description The path of the Apsara File Storage for HDFS data source.
     *
     * @example test-hdfs-path
     *
     * @var string
     */
    public $path;

    /**
     * @description The name of the MaxCompute project that is used as the data source.
     *
     * @example bbt_algo_pai
     *
     * @var string
     */
    public $project;

    /**
     * @description The table name.
     *
     * @example bbt_rec_swing_u2i2i_score_be_v1
     *
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'accessKey'    => 'accessKey',
        'accessSecret' => 'accessSecret',
        'bucket'       => 'bucket',
        'catalog'      => 'catalog',
        'database'     => 'database',
        'endpoint'     => 'endpoint',
        'namespace'    => 'namespace',
        'ossPath'      => 'ossPath',
        'partition'    => 'partition',
        'path'         => 'path',
        'project'      => 'project',
        'table'        => 'table',
        'tag'          => 'tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['accessKey'] = $this->accessKey;
        }
        if (null !== $this->accessSecret) {
            $res['accessSecret'] = $this->accessSecret;
        }
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }
        if (null !== $this->catalog) {
            $res['catalog'] = $this->catalog;
        }
        if (null !== $this->database) {
            $res['database'] = $this->database;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->ossPath) {
            $res['ossPath'] = $this->ossPath;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->table) {
            $res['table'] = $this->table;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKey'])) {
            $model->accessKey = $map['accessKey'];
        }
        if (isset($map['accessSecret'])) {
            $model->accessSecret = $map['accessSecret'];
        }
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }
        if (isset($map['catalog'])) {
            $model->catalog = $map['catalog'];
        }
        if (isset($map['database'])) {
            $model->database = $map['database'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['ossPath'])) {
            $model->ossPath = $map['ossPath'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['table'])) {
            $model->table = $map['table'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        return $model;
    }
}
