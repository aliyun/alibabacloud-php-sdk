<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\columns;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\schemas;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\tables;

class DescribeAllDataSourceResponseBody extends Model
{
    /**
     * @var columns
     */
    public $columns;

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
    protected $_name = [
        'columns' => 'Columns',
        'requestId' => 'RequestId',
        'schemas' => 'Schemas',
        'tables' => 'Tables',
    ];

    public function validate()
    {
        if (null !== $this->columns) {
            $this->columns->validate();
        }
        if (null !== $this->schemas) {
            $this->schemas->validate();
        }
        if (null !== $this->tables) {
            $this->tables->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            $res['Columns'] = null !== $this->columns ? $this->columns->toArray($noStream) : $this->columns;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->schemas) {
            $res['Schemas'] = null !== $this->schemas ? $this->schemas->toArray($noStream) : $this->schemas;
        }

        if (null !== $this->tables) {
            $res['Tables'] = null !== $this->tables ? $this->tables->toArray($noStream) : $this->tables;
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
