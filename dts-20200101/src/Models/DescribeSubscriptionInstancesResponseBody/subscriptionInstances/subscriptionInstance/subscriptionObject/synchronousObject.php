<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance\subscriptionObject;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance\subscriptionObject\synchronousObject\tableList;
use AlibabaCloud\Tea\Model;

class synchronousObject extends Model
{
    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var tableList
     */
    public $tableList;

    /**
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
