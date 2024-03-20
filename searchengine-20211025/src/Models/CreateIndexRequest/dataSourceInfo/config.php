<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest\dataSourceInfo;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description odps数据源ak
     *
     * @example L***p
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description odps数据源ak secret
     *
     * @example 5**9a6
     *
     * @var string
     */
    public $accessSecret;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @description odps数据源的endpoint, oss数据源的endpoint
     *
     * @example https://oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @description 数据源为odps时必填
     *
     * @example ds=20230114
     *
     * @var string
     */
    public $partition;

    /**
     * @var string
     */
    public $path;

    /**
     * @description odps数据源项目名称
     *
     * @example bbt_algo_pai
     *
     * @var string
     */
    public $project;

    /**
     * @description 表名称
     *
     * @example bbt_rec_swing_u2i2i_score_be_v1
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
