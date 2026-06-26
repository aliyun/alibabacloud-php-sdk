<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\StatementResult\schema;

class StatementResult extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int
     */
    public $executionTime;

    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var schema[]
     */
    public $schema;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'downloadUrl' => 'downloadUrl',
        'error' => 'error',
        'errorCode' => 'errorCode',
        'executionTime' => 'executionTime',
        'index' => 'index',
        'rowCount' => 'rowCount',
        'schema' => 'schema',
        'sql' => 'sql',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->schema)) {
            Model::validateArray($this->schema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['downloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->error) {
            $res['error'] = $this->error;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->executionTime) {
            $res['executionTime'] = $this->executionTime;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->rowCount) {
            $res['rowCount'] = $this->rowCount;
        }

        if (null !== $this->schema) {
            if (\is_array($this->schema)) {
                $res['schema'] = [];
                $n1 = 0;
                foreach ($this->schema as $item1) {
                    $res['schema'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['downloadUrl'])) {
            $model->downloadUrl = $map['downloadUrl'];
        }

        if (isset($map['error'])) {
            $model->error = $map['error'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['executionTime'])) {
            $model->executionTime = $map['executionTime'];
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['rowCount'])) {
            $model->rowCount = $map['rowCount'];
        }

        if (isset($map['schema'])) {
            if (!empty($map['schema'])) {
                $model->schema = [];
                $n1 = 0;
                foreach ($map['schema'] as $item1) {
                    $model->schema[$n1] = schema::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
