<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceStatusResponseBody\subscriptionObject;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceStatusResponseBody\subscriptionObject\synchronousObject\tableList;

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
        if (null !== $this->tableList) {
            $this->tableList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->tableList) {
            $res['TableList'] = null !== $this->tableList ? $this->tableList->toArray($noStream) : $this->tableList;
        }

        if (null !== $this->wholeDatabase) {
            $res['WholeDatabase'] = $this->wholeDatabase;
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
