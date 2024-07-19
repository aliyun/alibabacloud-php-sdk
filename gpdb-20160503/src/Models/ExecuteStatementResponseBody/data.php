<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementResponseBody\data\columnMetadata;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementResponseBody\data\records;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var columnMetadata
     */
    public $columnMetadata;

    /**
     * @var records
     */
    public $records;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalNumRows;
    protected $_name = [
        'columnMetadata' => 'ColumnMetadata',
        'records'        => 'Records',
        'totalNumRows'   => 'TotalNumRows',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnMetadata) {
            $res['ColumnMetadata'] = null !== $this->columnMetadata ? $this->columnMetadata->toMap() : null;
        }
        if (null !== $this->records) {
            $res['Records'] = null !== $this->records ? $this->records->toMap() : null;
        }
        if (null !== $this->totalNumRows) {
            $res['TotalNumRows'] = $this->totalNumRows;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnMetadata'])) {
            $model->columnMetadata = columnMetadata::fromMap($map['ColumnMetadata']);
        }
        if (isset($map['Records'])) {
            $model->records = records::fromMap($map['Records']);
        }
        if (isset($map['TotalNumRows'])) {
            $model->totalNumRows = $map['TotalNumRows'];
        }

        return $model;
    }
}
