<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListSchemasRequest extends Model
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
    public $endpoint;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $partition;

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
