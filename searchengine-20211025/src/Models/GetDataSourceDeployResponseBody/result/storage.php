<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result;

use AlibabaCloud\Dara\Model;

class storage extends Model
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
    public $catalog;

    /**
     * @var string
     */
    public $database;

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

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'accessKey' => 'accessKey',
        'accessSecret' => 'accessSecret',
        'bucket' => 'bucket',
        'catalog' => 'catalog',
        'database' => 'database',
        'endpoint' => 'endpoint',
        'namespace' => 'namespace',
        'ossPath' => 'ossPath',
        'partition' => 'partition',
        'path' => 'path',
        'project' => 'project',
        'table' => 'table',
        'tag' => 'tag',
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
