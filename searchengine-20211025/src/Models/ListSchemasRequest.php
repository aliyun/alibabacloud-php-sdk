<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListSchemasRequest extends Model
{
    /**
     * @description The AccessKey ID of the MaxCompute data source.
     *
     * @example ak
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The AccessKey secret of the MaxCompute data source.
     *
     * @example as
     *
     * @var string
     */
    public $accessSecret;

    /**
     * @description The endpoint of the MaxCompute data source.
     *
     * @example http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The namespace of the SARO data source.
     *
     * @example igraph-cn-tl32wnrhi04
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The shard name.
     *
     * @example dt=20230520
     *
     * @var string
     */
    public $partition;

    /**
     * @description The name of the MaxCompute project that is used as the data source.
     *
     * @example start-flask-v3-obcc
     *
     * @var string
     */
    public $project;

    /**
     * @description The name of the MaxCompute table that is used as the data source.
     *
     * @example item
     *
     * @var string
     */
    public $table;

    /**
     * @description The type of the data source. Valid values: odps, swift, saro, oss, and unKnow.
     *
     * This parameter is required.
     *
     * @example odps
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'accessKey' => 'accessKey',
        'accessSecret' => 'accessSecret',
        'endpoint' => 'endpoint',
        'namespace' => 'namespace',
        'partition' => 'partition',
        'project' => 'project',
        'table' => 'table',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['accessKey'] = $this->accessKey;
        }
        if (null !== $this->accessSecret) {
            $res['accessSecret'] = $this->accessSecret;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->table) {
            $res['table'] = $this->table;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSchemasRequest
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
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['table'])) {
            $model->table = $map['table'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
