<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateDataSourceRequest;

use AlibabaCloud\Tea\Model;

class saroConfig extends Model
{
    /**
     * @description The namespace of the SARO data source.
     *
     * @example igraph-cn-x0r3e3abe02
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the SARO table.
     *
     * @example index_hdfs
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'namespace' => 'namespace',
        'tableName' => 'tableName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saroConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        return $model;
    }
}
