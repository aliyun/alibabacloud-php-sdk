<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\synchronizationObjects\tableExcludes;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\synchronizationObjects\tableIncludes;
use AlibabaCloud\Tea\Model;

class synchronizationObjects extends Model
{
    /**
     * @description The name of the excluded table.
     *
     * @example newdtstestdatabase
     *
     * @var string
     */
    public $newSchemaName;

    /**
     * @description The tables that are synchronized by the task.
     *
     * @example dtstestdatabase
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name of the synchronized table.
     *
     * @var tableExcludes[]
     */
    public $tableExcludes;

    /**
     * @description The status of full data synchronization. Valid values:
     *
     *   **NotStarted**: Full data synchronization is not started.
     *   **Migrating**: Full data synchronization is in progress.
     *   **Failed**: Full data synchronization failed.
     *   **Finished**: Full data synchronization is completed.
     *
     * @var tableIncludes[]
     */
    public $tableIncludes;
    protected $_name = [
        'newSchemaName' => 'NewSchemaName',
        'schemaName'    => 'SchemaName',
        'tableExcludes' => 'TableExcludes',
        'tableIncludes' => 'TableIncludes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newSchemaName) {
            $res['NewSchemaName'] = $this->newSchemaName;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableExcludes) {
            $res['TableExcludes'] = [];
            if (null !== $this->tableExcludes && \is_array($this->tableExcludes)) {
                $n = 0;
                foreach ($this->tableExcludes as $item) {
                    $res['TableExcludes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableIncludes) {
            $res['TableIncludes'] = [];
            if (null !== $this->tableIncludes && \is_array($this->tableIncludes)) {
                $n = 0;
                foreach ($this->tableIncludes as $item) {
                    $res['TableIncludes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return synchronizationObjects
     */
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
                $n                    = 0;
                foreach ($map['TableExcludes'] as $item) {
                    $model->tableExcludes[$n++] = null !== $item ? tableExcludes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableIncludes'])) {
            if (!empty($map['TableIncludes'])) {
                $model->tableIncludes = [];
                $n                    = 0;
                foreach ($map['TableIncludes'] as $item) {
                    $model->tableIncludes[$n++] = null !== $item ? tableIncludes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
