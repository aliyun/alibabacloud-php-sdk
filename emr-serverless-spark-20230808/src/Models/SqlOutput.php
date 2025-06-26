<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SqlOutput\rows;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SqlOutput\schema;

class SqlOutput extends Model
{
    /**
     * @var rows[]
     */
    public $rows;

    /**
     * @var schema
     */
    public $schema;
    protected $_name = [
        'rows' => 'rows',
        'schema' => 'schema',
    ];

    public function validate()
    {
        if (\is_array($this->rows)) {
            Model::validateArray($this->rows);
        }
        if (null !== $this->schema) {
            $this->schema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rows) {
            if (\is_array($this->rows)) {
                $res['rows'] = [];
                $n1 = 0;
                foreach ($this->rows as $item1) {
                    $res['rows'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->schema) {
            $res['schema'] = null !== $this->schema ? $this->schema->toArray($noStream) : $this->schema;
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
            if (!empty($map['rows'])) {
                $model->rows = [];
                $n1 = 0;
                foreach ($map['rows'] as $item1) {
                    $model->rows[$n1] = rows::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['schema'])) {
            $model->schema = schema::fromMap($map['schema']);
        }

        return $model;
    }
}
