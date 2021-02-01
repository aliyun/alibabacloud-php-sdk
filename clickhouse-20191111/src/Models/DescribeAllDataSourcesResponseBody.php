<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourcesResponseBody\columns;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourcesResponseBody\schemas;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourcesResponseBody\tables;
use AlibabaCloud\Tea\Model;

class DescribeAllDataSourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tables
     */
    public $tables;

    /**
     * @var columns
     */
    public $columns;

    /**
     * @var schemas
     */
    public $schemas;
    protected $_name = [
        'requestId' => 'RequestId',
        'tables'    => 'Tables',
        'columns'   => 'Columns',
        'schemas'   => 'Schemas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tables) {
            $res['Tables'] = null !== $this->tables ? $this->tables->toMap() : null;
        }
        if (null !== $this->columns) {
            $res['Columns'] = null !== $this->columns ? $this->columns->toMap() : null;
        }
        if (null !== $this->schemas) {
            $res['Schemas'] = null !== $this->schemas ? $this->schemas->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAllDataSourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tables'])) {
            $model->tables = tables::fromMap($map['Tables']);
        }
        if (isset($map['Columns'])) {
            $model->columns = columns::fromMap($map['Columns']);
        }
        if (isset($map['Schemas'])) {
            $model->schemas = schemas::fromMap($map['Schemas']);
        }

        return $model;
    }
}
