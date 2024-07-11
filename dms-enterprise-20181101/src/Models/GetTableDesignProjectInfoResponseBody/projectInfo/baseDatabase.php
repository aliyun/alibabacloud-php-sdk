<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectInfoResponseBody\projectInfo;

use AlibabaCloud\Tea\Model;

class baseDatabase extends Model
{
    /**
     * @description The alias of the database instance.
     *
     * @example poc_test
     *
     * @var string
     */
    public $alias;

    /**
     * @description The database ID.
     *
     * @example 11****
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The type of the database. For more information about the valid values of this parameter, see [DbType parameter](https://help.aliyun.com/document_detail/198106.html).
     *
     * @example POLARDB
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the environment in which the database instance is deployed. Valid values:
     *
     *   **product**: production environment.
     *   **dev**: development environment.
     *   **pre**: pre-release environment.
     *   **test**: test environment.
     *   **sit**: system integration testing (SIT) environment.
     *   **uat**: user acceptance testing (UAT) environment.
     *   **pet**: stress testing environment.
     *   **stag**: staging environment.
     *
     * @example dev
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
     * @description The database name.
     *
     * @example bk_atc020
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name that is used to search for the database.
     *
     * @example schema_name@127.0.XX.XX
     *
     * @var string
     */
    public $searchName;
    protected $_name = [
        'alias'      => 'Alias',
        'dbId'       => 'DbId',
        'dbType'     => 'DbType',
        'envType'    => 'EnvType',
        'logic'      => 'Logic',
        'schemaName' => 'SchemaName',
        'searchName' => 'SearchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
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
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baseDatabase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
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
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        return $model;
    }
}
