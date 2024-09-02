<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ValidateDataSourcesResponseBody\result;

use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @description The parameters of the data source.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description The name of the table.
     *
     * @example user_activity_decision
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The type of the data source.
     *
     * @example rds
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'parameters' => 'parameters',
        'tableName'  => 'tableName',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
