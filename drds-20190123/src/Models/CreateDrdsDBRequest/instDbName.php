<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBRequest;

use AlibabaCloud\Dara\Model;

class instDbName extends Model
{
    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string[]
     */
    public $shardDbName;
    protected $_name = [
        'dbInstanceId' => 'DbInstanceId',
        'shardDbName' => 'ShardDbName',
    ];

    public function validate()
    {
        if (\is_array($this->shardDbName)) {
            Model::validateArray($this->shardDbName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        if (null !== $this->shardDbName) {
            if (\is_array($this->shardDbName)) {
                $res['ShardDbName'] = [];
                $n1 = 0;
                foreach ($this->shardDbName as $item1) {
                    $res['ShardDbName'][$n1] = $item1;
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
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        if (isset($map['ShardDbName'])) {
            if (!empty($map['ShardDbName'])) {
                $model->shardDbName = [];
                $n1 = 0;
                foreach ($map['ShardDbName'] as $item1) {
                    $model->shardDbName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
