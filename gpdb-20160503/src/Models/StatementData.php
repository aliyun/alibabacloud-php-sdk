<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class StatementData extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $secretArn;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var string[]
     */
    public $sqls;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'database' => 'Database',
        'id' => 'Id',
        'parameters' => 'Parameters',
        'secretArn' => 'SecretArn',
        'sql' => 'Sql',
        'sqls' => 'Sqls',
        'status' => 'Status',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->sqls)) {
            Model::validateArray($this->sqls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->secretArn) {
            $res['SecretArn'] = $this->secretArn;
        }

        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        if (null !== $this->sqls) {
            if (\is_array($this->sqls)) {
                $res['Sqls'] = [];
                $n1 = 0;
                foreach ($this->sqls as $item1) {
                    $res['Sqls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SecretArn'])) {
            $model->secretArn = $map['SecretArn'];
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        if (isset($map['Sqls'])) {
            if (!empty($map['Sqls'])) {
                $model->sqls = [];
                $n1 = 0;
                foreach ($map['Sqls'] as $item1) {
                    $model->sqls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
