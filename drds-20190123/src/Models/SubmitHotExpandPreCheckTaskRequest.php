<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;

class SubmitHotExpandPreCheckTaskRequest extends Model
{
    /**
     * @var string
     */
    public $dbInstType;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string[]
     */
    public $tableList;
    protected $_name = [
        'dbInstType' => 'DbInstType',
        'dbName' => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'tableList' => 'TableList',
    ];

    public function validate()
    {
        if (\is_array($this->tableList)) {
            Model::validateArray($this->tableList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        if (null !== $this->tableList) {
            if (\is_array($this->tableList)) {
                $res['TableList'] = [];
                $n1 = 0;
                foreach ($this->tableList as $item1) {
                    $res['TableList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        if (isset($map['TableList'])) {
            if (!empty($map['TableList'])) {
                $model->tableList = [];
                $n1 = 0;
                foreach ($map['TableList'] as $item1) {
                    $model->tableList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
