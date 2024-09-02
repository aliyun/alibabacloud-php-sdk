<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result;

use AlibabaCloud\Tea\Model;

class dataSources extends Model
{
    /**
     * @var mixed[][]
     */
    public $fields;

    /**
     * @var string
     */
    public $keyField;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var mixed[]
     */
    public $plugins;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'fields'     => 'fields',
        'keyField'   => 'keyField',
        'parameters' => 'parameters',
        'plugins'    => 'plugins',
        'schemaName' => 'schemaName',
        'tableName'  => 'tableName',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['fields'] = $this->fields;
        }
        if (null !== $this->keyField) {
            $res['keyField'] = $this->keyField;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->plugins) {
            $res['plugins'] = $this->plugins;
        }
        if (null !== $this->schemaName) {
            $res['schemaName'] = $this->schemaName;
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
     * @return dataSources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = $map['fields'];
            }
        }
        if (isset($map['keyField'])) {
            $model->keyField = $map['keyField'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['plugins'])) {
            $model->plugins = $map['plugins'];
        }
        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
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
