<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponseBody\ownerApplyOrderDetail\resources;

use AlibabaCloud\Dara\Model;

class resourceDetail extends Model
{
    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int[]
     */
    public $ownerIds;

    /**
     * @var string[]
     */
    public $ownerNickNames;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dbType' => 'DbType',
        'envType' => 'EnvType',
        'ownerIds' => 'OwnerIds',
        'ownerNickNames' => 'OwnerNickNames',
        'searchName' => 'SearchName',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->ownerIds)) {
            Model::validateArray($this->ownerIds);
        }
        if (\is_array($this->ownerNickNames)) {
            Model::validateArray($this->ownerNickNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->ownerIds) {
            if (\is_array($this->ownerIds)) {
                $res['OwnerIds'] = [];
                $n1 = 0;
                foreach ($this->ownerIds as $item1) {
                    $res['OwnerIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ownerNickNames) {
            if (\is_array($this->ownerNickNames)) {
                $res['OwnerNickNames'] = [];
                $n1 = 0;
                foreach ($this->ownerNickNames as $item1) {
                    $res['OwnerNickNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['OwnerIds'])) {
            if (!empty($map['OwnerIds'])) {
                $model->ownerIds = [];
                $n1 = 0;
                foreach ($map['OwnerIds'] as $item1) {
                    $model->ownerIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OwnerNickNames'])) {
            if (!empty($map['OwnerNickNames'])) {
                $model->ownerNickNames = [];
                $n1 = 0;
                foreach ($map['OwnerNickNames'] as $item1) {
                    $model->ownerNickNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
