<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ExecuteMultiAccountSQLQueryResponseBody\columns;
use AlibabaCloud\Tea\Model;

class ExecuteMultiAccountSQLQueryResponseBody extends Model
{
    /**
     * @description The columns.
     *
     * @var columns[]
     */
    public $columns;

    /**
     * @description The request ID.
     *
     * @example 44C8A952-D6B0-5BC8-82D5-93BA02E26F2E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array of search results.
     *
     * @var mixed[]
     */
    public $rows;
    protected $_name = [
        'columns'   => 'Columns',
        'requestId' => 'RequestId',
        'rows'      => 'Rows',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteMultiAccountSQLQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Rows'])) {
            if (!empty($map['Rows'])) {
                $model->rows = $map['Rows'];
            }
        }

        return $model;
    }
}
