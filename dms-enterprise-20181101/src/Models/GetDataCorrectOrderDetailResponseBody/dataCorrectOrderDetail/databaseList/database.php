<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\databaseList;

use AlibabaCloud\Tea\Model;

class database extends Model
{
    /**
     * @description The ID of the database.
     *
     * @example 1860****
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The engine of the database.
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the environment to which the database belongs. Valid values:
     *
     * - stag: STAG environment
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @description Indicates whether the database is a logical database. Valid values:
     *
     * - **true**: The database is a logical database.
     * - **false**: The database is a physical database.
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The name that is used to search for the database.
     *
     * @example xxx@xxx:3306
     *
     * @var string
     */
    public $searchName;
    protected $_name = [
        'dbId'       => 'DbId',
        'dbType'     => 'DbType',
        'envType'    => 'EnvType',
        'logic'      => 'Logic',
        'searchName' => 'SearchName',
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
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return database
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
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        return $model;
    }
}
