<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database\accounts;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database\advancedInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database\basicInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database\runtimeInfo;
use AlibabaCloud\Tea\Model;

class database extends Model
{
    /**
     * @description The information about the account. Each account has specific permissions on the database.
     *
     * @var accounts
     */
    public $accounts;

    /**
     * @description The advanced information about the database.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @var advancedInfo
     */
    public $advancedInfo;

    /**
     * @description The basic information about the database.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @var basicInfo
     */
    public $basicInfo;

    /**
     * @description The name of the character set.
     *
     * @example utf8
     *
     * @var string
     */
    public $characterSetName;

    /**
     * @description The collation of the character set. The example value C indicates localization.
     *
     * >  This parameter is returned only for instances that run PostgreSQL.
     * @example C
     *
     * @var string
     */
    public $collate;

    /**
     * @description The limit on the number of concurrent requests. The value -1 indicates that the number of concurrent requests is unlimited.
     *
     * >  This parameter is returned only for instances that run PostgreSQL.
     * @example -1
     *
     * @var string
     */
    public $connLimit;

    /**
     * @description The type of the character set.
     *
     * >  This parameter is returned only for instances that run PostgreSQL.
     * @example en_US.utf8
     *
     * @var string
     */
    public $ctype;

    /**
     * @description The description of the database.
     *
     * @example testdb
     *
     * @var string
     */
    public $DBDescription;

    /**
     * @description The ID of the instance to which the database belongs.
     *
     * @example rm-uf6wjk5****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The database name.
     *
     * @example testDB01
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The database status. Valid values:
     *
     *   **Creating**
     *   **Running**
     *   **Deleting**
     *   **Cold**
     *
     * @example Creating
     *
     * @var string
     */
    public $DBStatus;

    /**
     * @description The database engine of the instance.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The runtime information about the database.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @var runtimeInfo
     */
    public $runtimeInfo;

    /**
     * @description The database tablespace.
     *
     * >  This parameter is returned only for instances that run PostgreSQL.
     * @example pg_default
     *
     * @var string
     */
    public $tablespace;

    /**
     * @description The total number of entries returned.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accounts'         => 'Accounts',
        'advancedInfo'     => 'AdvancedInfo',
        'basicInfo'        => 'BasicInfo',
        'characterSetName' => 'CharacterSetName',
        'collate'          => 'Collate',
        'connLimit'        => 'ConnLimit',
        'ctype'            => 'Ctype',
        'DBDescription'    => 'DBDescription',
        'DBInstanceId'     => 'DBInstanceId',
        'DBName'           => 'DBName',
        'DBStatus'         => 'DBStatus',
        'engine'           => 'Engine',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'resourceGroupId'  => 'ResourceGroupId',
        'runtimeInfo'      => 'RuntimeInfo',
        'tablespace'       => 'Tablespace',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toMap() : null;
        }
        if (null !== $this->advancedInfo) {
            $res['AdvancedInfo'] = null !== $this->advancedInfo ? $this->advancedInfo->toMap() : null;
        }
        if (null !== $this->basicInfo) {
            $res['BasicInfo'] = null !== $this->basicInfo ? $this->basicInfo->toMap() : null;
        }
        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }
        if (null !== $this->collate) {
            $res['Collate'] = $this->collate;
        }
        if (null !== $this->connLimit) {
            $res['ConnLimit'] = $this->connLimit;
        }
        if (null !== $this->ctype) {
            $res['Ctype'] = $this->ctype;
        }
        if (null !== $this->DBDescription) {
            $res['DBDescription'] = $this->DBDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->DBStatus) {
            $res['DBStatus'] = $this->DBStatus;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->runtimeInfo) {
            $res['RuntimeInfo'] = null !== $this->runtimeInfo ? $this->runtimeInfo->toMap() : null;
        }
        if (null !== $this->tablespace) {
            $res['Tablespace'] = $this->tablespace;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Accounts'])) {
            $model->accounts = accounts::fromMap($map['Accounts']);
        }
        if (isset($map['AdvancedInfo'])) {
            $model->advancedInfo = advancedInfo::fromMap($map['AdvancedInfo']);
        }
        if (isset($map['BasicInfo'])) {
            $model->basicInfo = basicInfo::fromMap($map['BasicInfo']);
        }
        if (isset($map['CharacterSetName'])) {
            $model->characterSetName = $map['CharacterSetName'];
        }
        if (isset($map['Collate'])) {
            $model->collate = $map['Collate'];
        }
        if (isset($map['ConnLimit'])) {
            $model->connLimit = $map['ConnLimit'];
        }
        if (isset($map['Ctype'])) {
            $model->ctype = $map['Ctype'];
        }
        if (isset($map['DBDescription'])) {
            $model->DBDescription = $map['DBDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DBStatus'])) {
            $model->DBStatus = $map['DBStatus'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RuntimeInfo'])) {
            $model->runtimeInfo = runtimeInfo::fromMap($map['RuntimeInfo']);
        }
        if (isset($map['Tablespace'])) {
            $model->tablespace = $map['Tablespace'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
