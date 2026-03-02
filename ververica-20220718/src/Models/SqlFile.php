<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SqlFile extends Model
{
    /**
     * @var string
     */
    public $batchMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $sessionClusterName;

    /**
     * @var string
     */
    public $sqlFileId;

    /**
     * @var string
     */
    public $sqlScript;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'batchMode' => 'batchMode',
        'description' => 'description',
        'name' => 'name',
        'namespace' => 'namespace',
        'parentId' => 'parentId',
        'sessionClusterName' => 'sessionClusterName',
        'sqlFileId' => 'sqlFileId',
        'sqlScript' => 'sqlScript',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchMode) {
            $res['batchMode'] = $this->batchMode;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        if (null !== $this->sessionClusterName) {
            $res['sessionClusterName'] = $this->sessionClusterName;
        }

        if (null !== $this->sqlFileId) {
            $res['sqlFileId'] = $this->sqlFileId;
        }

        if (null !== $this->sqlScript) {
            $res['sqlScript'] = $this->sqlScript;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['batchMode'])) {
            $model->batchMode = $map['batchMode'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['sessionClusterName'])) {
            $model->sessionClusterName = $map['sessionClusterName'];
        }

        if (isset($map['sqlFileId'])) {
            $model->sqlFileId = $map['sqlFileId'];
        }

        if (isset($map['sqlScript'])) {
            $model->sqlScript = $map['sqlScript'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
