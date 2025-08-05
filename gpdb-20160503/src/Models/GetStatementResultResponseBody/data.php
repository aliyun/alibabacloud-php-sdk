<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetStatementResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetStatementResultResponseBody\data\columnMetadata;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetStatementResultResponseBody\data\records;

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
     * @var int
     */
    public $totalNumRows;
    protected $_name = [
        'columnMetadata' => 'ColumnMetadata',
        'records' => 'Records',
        'totalNumRows' => 'TotalNumRows',
    ];

    public function validate()
    {
        if (null !== $this->columnMetadata) {
            $this->columnMetadata->validate();
        }
        if (null !== $this->records) {
            $this->records->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnMetadata) {
            $res['ColumnMetadata'] = null !== $this->columnMetadata ? $this->columnMetadata->toArray($noStream) : $this->columnMetadata;
        }

        if (null !== $this->records) {
            $res['Records'] = null !== $this->records ? $this->records->toArray($noStream) : $this->records;
        }

        if (null !== $this->totalNumRows) {
            $res['TotalNumRows'] = $this->totalNumRows;
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
