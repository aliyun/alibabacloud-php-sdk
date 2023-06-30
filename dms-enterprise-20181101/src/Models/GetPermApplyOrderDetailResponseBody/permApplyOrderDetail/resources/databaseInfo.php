<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources;

use AlibabaCloud\Tea\Model;

class databaseInfo extends Model
{
    /**
     * @description The database ID.
     *
     * @example 12345
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The type of the database engine.
     *
     * @example MySQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the environment to which the instance belongs. For more information, see [Change the environment type of an instance](~~163309~~).
     *
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @description Indicates whether the database is a logical database. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The IDs of the owners of the database.
     *
     * @var int[]
     */
    public $ownerIds;

    /**
     * @description The nicknames of the owners of the database.
     *
     * @var string[]
     */
    public $ownerNickNames;

    /**
     * @description The name that is used to search for the database.
     *
     * @example test@xxxx:3306【test】
     *
     * @var string
     */
    public $searchName;
    protected $_name = [
        'dbId'           => 'DbId',
        'dbType'         => 'DbType',
        'envType'        => 'EnvType',
        'logic'          => 'Logic',
        'ownerIds'       => 'OwnerIds',
        'ownerNickNames' => 'OwnerNickNames',
        'searchName'     => 'SearchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
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

        return $model;
    }
}
