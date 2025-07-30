<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceStatusResponseBody\subscriptionObject;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceStatusResponseBody\subscriptionObject\synchronousObject\tableList;
use AlibabaCloud\Tea\Model;

class synchronousObject extends Model
{
    /**
     * @description The name of the database to which the object belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The table name.
     *
     * @var tableList
     */
    public $tableList;

    /**
     * @description Indicates whether the data of an entire database is tracked. Valid values:
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
        'databaseName' => 'DatabaseName',
        'tableList' => 'TableList',
        'wholeDatabase' => 'WholeDatabase',
    ];

    public function validate() {}

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
