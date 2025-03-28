<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusResponseBody\synchronizationObjects\tableExcludes;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusResponseBody\synchronizationObjects\tableIncludes;

class synchronizationObjects extends Model
{
    /**
     * @var string
     */
    public $newSchemaName;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var tableExcludes[]
     */
    public $tableExcludes;

    /**
     * @var tableIncludes[]
     */
    public $tableIncludes;
    protected $_name = [
        'newSchemaName' => 'NewSchemaName',
        'schemaName' => 'SchemaName',
        'tableExcludes' => 'TableExcludes',
        'tableIncludes' => 'TableIncludes',
    ];

    public function validate()
    {
        if (\is_array($this->tableExcludes)) {
            Model::validateArray($this->tableExcludes);
        }
        if (\is_array($this->tableIncludes)) {
            Model::validateArray($this->tableIncludes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newSchemaName) {
            $res['NewSchemaName'] = $this->newSchemaName;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->tableExcludes) {
            if (\is_array($this->tableExcludes)) {
                $res['TableExcludes'] = [];
                $n1 = 0;
                foreach ($this->tableExcludes as $item1) {
                    $res['TableExcludes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tableIncludes) {
            if (\is_array($this->tableIncludes)) {
                $res['TableIncludes'] = [];
                $n1 = 0;
                foreach ($this->tableIncludes as $item1) {
                    $res['TableIncludes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['NewSchemaName'])) {
            $model->newSchemaName = $map['NewSchemaName'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['TableExcludes'])) {
            if (!empty($map['TableExcludes'])) {
                $model->tableExcludes = [];
                $n1 = 0;
                foreach ($map['TableExcludes'] as $item1) {
                    $model->tableExcludes[$n1++] = tableExcludes::fromMap($item1);
                }
            }
        }

        if (isset($map['TableIncludes'])) {
            if (!empty($map['TableIncludes'])) {
                $model->tableIncludes = [];
                $n1 = 0;
                foreach ($map['TableIncludes'] as $item1) {
                    $model->tableIncludes[$n1++] = tableIncludes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
