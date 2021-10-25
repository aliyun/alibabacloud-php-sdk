<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllDataSourceResponseBody\columns;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllDataSourceResponseBody\schemas;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllDataSourceResponseBody\tables;
use AlibabaCloud\Tea\Model;

class DescribeAllDataSourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var schemas
     */
    public $schemas;

    /**
     * @var tables
     */
    public $tables;

    /**
     * @var columns
     */
    public $columns;
    protected $_name = [
        'requestId' => 'RequestId',
        'schemas'   => 'Schemas',
        'tables'    => 'Tables',
        'columns'   => 'Columns',
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
        if (null !== $this->schemas) {
            $res['Schemas'] = null !== $this->schemas ? $this->schemas->toMap() : null;
        }
        if (null !== $this->tables) {
            $res['Tables'] = null !== $this->tables ? $this->tables->toMap() : null;
        }
        if (null !== $this->columns) {
            $res['Columns'] = null !== $this->columns ? $this->columns->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Schemas'])) {
            $model->schemas = schemas::fromMap($map['Schemas']);
        }
        if (isset($map['Tables'])) {
            $model->tables = tables::fromMap($map['Tables']);
        }
        if (isset($map['Columns'])) {
            $model->columns = columns::fromMap($map['Columns']);
        }

        return $model;
    }
}
