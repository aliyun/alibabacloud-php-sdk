<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\migrationObject;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\migrationObject\synchronousObject\tableList;
use AlibabaCloud\Tea\Model;

class synchronousObject extends Model
{
    /**
     * @description The name of the database to which the migration object in the source instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The names of the migrated tables.
     *
     * @var tableList
     */
    public $tableList;

    /**
     * @description Indicates whether an entire database is migrated. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var string
     */
    public $wholeDatabase;
    protected $_name = [
        'databaseName'  => 'DatabaseName',
        'tableList'     => 'TableList',
        'wholeDatabase' => 'WholeDatabase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->tableList) {
            $res['TableList'] = null !== $this->tableList ? $this->tableList->toMap() : null;
        }
        if (null !== $this->wholeDatabase) {
            $res['WholeDatabase'] = $this->wholeDatabase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return synchronousObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['TableList'])) {
            $model->tableList = tableList::fromMap($map['TableList']);
        }
        if (isset($map['WholeDatabase'])) {
            $model->wholeDatabase = $map['WholeDatabase'];
        }

        return $model;
    }
}
