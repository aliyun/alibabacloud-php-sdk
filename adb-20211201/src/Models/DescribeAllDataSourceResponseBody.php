<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\columns;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\schemas;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\tables;
use AlibabaCloud\Tea\Model;

class DescribeAllDataSourceResponseBody extends Model
{
    /**
     * @description The queried columns.
     *
     * @var columns
     */
    public $columns;

    /**
     * @description The request ID.
     *
     * @example C7EDB8E4-9769-4233-88C7-DCA4C9******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried databases.
     *
     * @var schemas
     */
    public $schemas;

    /**
     * @description The queried tables.
     *
     * @var tables
     */
    public $tables;
    protected $_name = [
        'columns'   => 'Columns',
        'requestId' => 'RequestId',
        'schemas'   => 'Schemas',
        'tables'    => 'Tables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['Columns'] = null !== $this->columns ? $this->columns->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->schemas) {
            $res['Schemas'] = null !== $this->schemas ? $this->schemas->toMap() : null;
        }
        if (null !== $this->tables) {
            $res['Tables'] = null !== $this->tables ? $this->tables->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAllDataSourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            $model->columns = columns::fromMap($map['Columns']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Schemas'])) {
            $model->schemas = schemas::fromMap($map['Schemas']);
        }
        if (isset($map['Tables'])) {
            $model->tables = tables::fromMap($map['Tables']);
        }

        return $model;
    }
}
