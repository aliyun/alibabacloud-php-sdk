<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList\databaseList\tableList;
use AlibabaCloud\Tea\Model;

class databaseList extends Model
{
    /**
     * @description The ID of the database.
     *
     * @example 489347
     *
     * @var string
     */
    public $dbId;

    /**
     * @description The name of the database.
     *
     * @example db-test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The type of the database. For more information about the valid values of this parameter, see [DbType parameter](https://help.aliyun.com/document_detail/198106.html).
     *
     * @example MySQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the environment to which the database belongs. Valid values:
     *
     *   **product**: production environment
     *   **dev**: development environment
     *   **pre**: pre-release environment
     *   **test**: test environment
     *   **sit**: system integration testing (SIT) environment
     *   **uat**: user acceptance testing (UAT) environment
     *   **pet**: stress testing environment
     *   **stag**: staging environment
     *
     * > For more information, see [Change the environment type of an instance](https://help.aliyun.com/document_detail/163309.html).
     * @example pre
     *
     * @var string
     */
    public $envType;

    /**
     * @description The physical tables.
     *
     * @var tableList[]
     */
    public $tableList;
    protected $_name = [
        'dbId'      => 'DbId',
        'dbName'    => 'DbName',
        'dbType'    => 'DbType',
        'envType'   => 'EnvType',
        'tableList' => 'TableList',
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
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->tableList) {
            $res['TableList'] = [];
            if (null !== $this->tableList && \is_array($this->tableList)) {
                $n = 0;
                foreach ($this->tableList as $item) {
                    $res['TableList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['TableList'])) {
            if (!empty($map['TableList'])) {
                $model->tableList = [];
                $n                = 0;
                foreach ($map['TableList'] as $item) {
                    $model->tableList[$n++] = null !== $item ? tableList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
