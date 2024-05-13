<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail;

use AlibabaCloud\Tea\Model;

class sourceDatabaseInfo extends Model
{
    /**
     * @description The ID of the source database.
     *
     * @example 432532
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
     * @description The type of the environment to which the database instance belongs. For more information, see [Change the environment type of an instance](https://help.aliyun.com/document_detail/163309.html).
     *
     * @example dev
     *
     * @var string
     */
    public $envType;

    /**
     * @description Indicates whether the database is a logical database. Valid values:
     *
     *   **true**: The database is a logical database.
     *   **false**: The database is not a logical database
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The name that is used to search for the database.
     *
     * @example test
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
     * @return sourceDatabaseInfo
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
