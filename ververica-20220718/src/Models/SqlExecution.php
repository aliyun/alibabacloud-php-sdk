<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SqlExecution extends Model
{
    /**
     * @var bool
     */
    public $batchMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $message;

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
    public $sessionClusterName;

    /**
     * @var string
     */
    public $sqlExecutionId;

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
    public $state;

    /**
     * @var SqlStatement[]
     */
    public $statements;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'batchMode' => 'batchMode',
        'description' => 'description',
        'message' => 'message',
        'name' => 'name',
        'namespace' => 'namespace',
        'sessionClusterName' => 'sessionClusterName',
        'sqlExecutionId' => 'sqlExecutionId',
        'sqlFileId' => 'sqlFileId',
        'sqlScript' => 'sqlScript',
        'state' => 'state',
        'statements' => 'statements',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->statements)) {
            Model::validateArray($this->statements);
        }
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

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->sessionClusterName) {
            $res['sessionClusterName'] = $this->sessionClusterName;
        }

        if (null !== $this->sqlExecutionId) {
            $res['sqlExecutionId'] = $this->sqlExecutionId;
        }

        if (null !== $this->sqlFileId) {
            $res['sqlFileId'] = $this->sqlFileId;
        }

        if (null !== $this->sqlScript) {
            $res['sqlScript'] = $this->sqlScript;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->statements) {
            if (\is_array($this->statements)) {
                $res['statements'] = [];
                $n1 = 0;
                foreach ($this->statements as $item1) {
                    $res['statements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['sessionClusterName'])) {
            $model->sessionClusterName = $map['sessionClusterName'];
        }

        if (isset($map['sqlExecutionId'])) {
            $model->sqlExecutionId = $map['sqlExecutionId'];
        }

        if (isset($map['sqlFileId'])) {
            $model->sqlFileId = $map['sqlFileId'];
        }

        if (isset($map['sqlScript'])) {
            $model->sqlScript = $map['sqlScript'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['statements'])) {
            if (!empty($map['statements'])) {
                $model->statements = [];
                $n1 = 0;
                foreach ($map['statements'] as $item1) {
                    $model->statements[$n1] = SqlStatement::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
