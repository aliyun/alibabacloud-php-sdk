<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponseBody\ownerApplyOrderDetail\resources;

use AlibabaCloud\Tea\Model;

class resourceDetail extends Model
{
    /**
     * @description The type of the database engine.
     *
     * @example MYSQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the environment to which the instance belongs. For more information, see [Change the environment type of an instance](https://help.aliyun.com/document_detail/163309.html).
     *
     * @example PRODUCT
     *
     * @var string
     */
    public $envType;

    /**
     * @description The IDs of the original owners.
     *
     * @var int[]
     */
    public $ownerIds;

    /**
     * @description The nicknames of the owners.
     *
     * @var string[]
     */
    public $ownerNickNames;

    /**
     * @description The search name of the resource.
     *
     * @example yuyang【test】
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The name of the table.
     *
     * > : This parameter is returned when you submit a Database-OWNER ticket.
     * @example test
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dbType'         => 'DbType',
        'envType'        => 'EnvType',
        'ownerIds'       => 'OwnerIds',
        'ownerNickNames' => 'OwnerNickNames',
        'searchName'     => 'SearchName',
        'tableName'      => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->ownerIds) {
            $res['OwnerIds'] = $this->ownerIds;
        }
        if (null !== $this->ownerNickNames) {
            $res['OwnerNickNames'] = $this->ownerNickNames;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDetail
     */
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
                $model->ownerIds = $map['OwnerIds'];
            }
        }
        if (isset($map['OwnerNickNames'])) {
            if (!empty($map['OwnerNickNames'])) {
                $model->ownerNickNames = $map['OwnerNickNames'];
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
