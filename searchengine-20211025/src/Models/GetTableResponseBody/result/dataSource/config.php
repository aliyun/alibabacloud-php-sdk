<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result\dataSource;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $accessSecret;

    /**
     * @var string
     */
    public $bucket;

    /**
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
     * @var string
     */
    public $partition;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'accessKey' => 'accessKey',
        'accessSecret' => 'accessSecret',
        'bucket' => 'bucket',
        'endpoint' => 'endpoint',
        'namespace' => 'namespace',
        'ossPath' => 'ossPath',
        'partition' => 'partition',
        'path' => 'path',
        'project' => 'project',
        'table' => 'table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
