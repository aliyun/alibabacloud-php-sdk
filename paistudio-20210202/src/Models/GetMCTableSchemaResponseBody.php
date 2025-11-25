<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetMCTableSchemaResponseBody\columns;

class GetMCTableSchemaResponseBody extends Model
{
    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var string[]
     */
    public $partitionColumns;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'columns' => 'Columns',
        'partitionColumns' => 'PartitionColumns',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->partitionColumns)) {
            Model::validateArray($this->partitionColumns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->partitionColumns) {
            if (\is_array($this->partitionColumns)) {
                $res['PartitionColumns'] = [];
                $n1 = 0;
                foreach ($this->partitionColumns as $item1) {
                    $res['PartitionColumns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1] = columns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PartitionColumns'])) {
            if (!empty($map['PartitionColumns'])) {
                $model->partitionColumns = [];
                $n1 = 0;
                foreach ($map['PartitionColumns'] as $item1) {
                    $model->partitionColumns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
