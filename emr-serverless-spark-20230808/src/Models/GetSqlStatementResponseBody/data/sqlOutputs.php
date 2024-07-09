<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementResponseBody\data;

use AlibabaCloud\Tea\Model;

class sqlOutputs extends Model
{
    /**
     * @description The queried data, which is a string in the JSON format.
     *
     * @example [{\\"values\\":[\\"test_db\\",\\"test_table\\",false]}
     *
     * @var string
     */
    public $rows;

    /**
     * @description The information about the schema, which is a string in the JSON format.
     *
     * @example {\\"type\\":\\"struct\\",\\"fields\\":[{\\"name\\":\\"namespace\\",\\"type\\":\\"string\\",\\"nullable\\":false,\\"metadata\\":{}},{\\"name\\":\\"tableName\\",\\"type\\":\\"string\\",\\"nullable\\":false,\\"metadata\\":{}},{\\"name\\":\\"isTemporary\\",\\"type\\":\\"boolean\\",\\"nullable\\":false,\\"metadata\\":{}}]}
     *
     * @var string
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
            $res['rows'] = $this->rows;
        }
        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sqlOutputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['rows'])) {
            $model->rows = $map['rows'];
        }
        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }

        return $model;
    }
}
