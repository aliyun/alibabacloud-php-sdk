<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SqlOutput\rows;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SqlOutput\schema;
use AlibabaCloud\Tea\Model;

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
        'rows'   => 'rows',
        'schema' => 'schema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rows) {
            $res['rows'] = [];
            if (null !== $this->rows && \is_array($this->rows)) {
                $n = 0;
                foreach ($this->rows as $item) {
                    $res['rows'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->schema) {
            $res['schema'] = null !== $this->schema ? $this->schema->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SqlOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['rows'])) {
            if (!empty($map['rows'])) {
                $model->rows = [];
                $n           = 0;
                foreach ($map['rows'] as $item) {
                    $model->rows[$n++] = null !== $item ? rows::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['schema'])) {
            $model->schema = schema::fromMap($map['schema']);
        }

        return $model;
    }
}
