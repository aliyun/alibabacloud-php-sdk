<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListApsLifecycleStrategyResponseBody\items;

use AlibabaCloud\Tea\Model;

class operationTables extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example true
     *
     * @var string
     */
    public $processAll;

    /**
     * @var string[]
     */
    public $tableNames;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'processAll'   => 'ProcessAll',
        'tableNames'   => 'TableNames',
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
        if (null !== $this->processAll) {
            $res['ProcessAll'] = $this->processAll;
        }
        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationTables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['ProcessAll'])) {
            $model->processAll = $map['ProcessAll'];
        }
        if (isset($map['TableNames'])) {
            if (!empty($map['TableNames'])) {
                $model->tableNames = $map['TableNames'];
            }
        }

        return $model;
    }
}
