<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementResponseBody\data;

use AlibabaCloud\Dara\Model;

class sqlOutputs extends Model
{
    /**
     * @var string
     */
    public $rows;

    /**
     * @var string
     */
    public $rowsFilePath;

    /**
     * @var string
     */
    public $schema;
    protected $_name = [
        'rows' => 'rows',
        'rowsFilePath' => 'rowsFilePath',
        'schema' => 'schema',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rows) {
            $res['rows'] = $this->rows;
        }

        if (null !== $this->rowsFilePath) {
            $res['rowsFilePath'] = $this->rowsFilePath;
        }

        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
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
        if (isset($map['rows'])) {
            $model->rows = $map['rows'];
        }

        if (isset($map['rowsFilePath'])) {
            $model->rowsFilePath = $map['rowsFilePath'];
        }

        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }

        return $model;
    }
}
