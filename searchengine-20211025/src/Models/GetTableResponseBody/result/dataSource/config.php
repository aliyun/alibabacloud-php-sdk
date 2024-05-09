<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result\dataSource;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description AK
     *
     * @example ak
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description AS
     *
     * @example as
     *
     * @var string
     */
    public $accessSecret;

    /**
     * @example heytea-ops-oss
     *
     * @var string
     */
    public $bucket;

    /**
     * @example http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @example /opensearch_index_data/sift_oss_test.data
     *
     * @var string
     */
    public $ossPath;

    /**
     * @example ds=20220808
     *
     * @var string
     */
    public $partition;

    /**
     * @example vendor/sebastian/comparator/src/exceptions
     *
     * @var string
     */
    public $path;

    /**
     * @example dp_pdm_marketing_prod
     *
     * @var string
     */
    public $project;

    /**
     * @example test_add
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'accessKey'    => 'accessKey',
        'accessSecret' => 'accessSecret',
        'bucket'       => 'bucket',
        'endpoint'     => 'endpoint',
        'namespace'    => 'namespace',
        'ossPath'      => 'ossPath',
        'partition'    => 'partition',
        'path'         => 'path',
        'project'      => 'project',
        'table'        => 'table',
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

        return $model;
    }
}
