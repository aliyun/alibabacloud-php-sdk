<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class ExecuteStatementResult extends Model
{
    /**
     * @var ColumnMetadata[]
     */
    public $columnMetadata;

    /**
     * @var string
     */
    public $formattedRecords;

    /**
     * @var Field[]
     */
    public $generatedFields;

    /**
     * @var int
     */
    public $numberOfRecordsUpdated;

    /**
     * @var Field[][]
     */
    public $records;
    protected $_name = [
        'columnMetadata'         => 'ColumnMetadata',
        'formattedRecords'       => 'FormattedRecords',
        'generatedFields'        => 'GeneratedFields',
        'numberOfRecordsUpdated' => 'NumberOfRecordsUpdated',
        'records'                => 'Records',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnMetadata) {
            $res['ColumnMetadata'] = [];
            if (null !== $this->columnMetadata && \is_array($this->columnMetadata)) {
                $n = 0;
                foreach ($this->columnMetadata as $item) {
                    $res['ColumnMetadata'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->formattedRecords) {
            $res['FormattedRecords'] = $this->formattedRecords;
        }
        if (null !== $this->generatedFields) {
            $res['GeneratedFields'] = [];
            if (null !== $this->generatedFields && \is_array($this->generatedFields)) {
                $n = 0;
                foreach ($this->generatedFields as $item) {
                    $res['GeneratedFields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->numberOfRecordsUpdated) {
            $res['NumberOfRecordsUpdated'] = $this->numberOfRecordsUpdated;
        }
        if (null !== $this->records) {
            $res['Records'] = $this->records;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteStatementResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnMetadata'])) {
            if (!empty($map['ColumnMetadata'])) {
                $model->columnMetadata = [];
                $n                     = 0;
                foreach ($map['ColumnMetadata'] as $item) {
                    $model->columnMetadata[$n++] = null !== $item ? ColumnMetadata::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FormattedRecords'])) {
            $model->formattedRecords = $map['FormattedRecords'];
        }
        if (isset($map['GeneratedFields'])) {
            if (!empty($map['GeneratedFields'])) {
                $model->generatedFields = [];
                $n                      = 0;
                foreach ($map['GeneratedFields'] as $item) {
                    $model->generatedFields[$n++] = null !== $item ? Field::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NumberOfRecordsUpdated'])) {
            $model->numberOfRecordsUpdated = $map['NumberOfRecordsUpdated'];
        }
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = $map['Records'];
            }
        }

        return $model;
    }
}
