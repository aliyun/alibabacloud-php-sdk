<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationDatabasesResponseBody;

use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @description The address type of the database. Valid values:
     *
     *   **Public**
     *   **Private**
     *
     * @example Private
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @description The remarks of the database.
     *
     * @example cpp
     *
     * @var string
     */
    public $comment;

    /**
     * @description The database ID.
     *
     * @example 26
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The database name.
     *
     * @example zDatabase
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The port of the database.
     *
     * @example 3306
     *
     * @var int
     */
    public $databasePort;

    /**
     * @description The private address of the database.
     *
     * @example rm-b******9b.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $databasePrivateAddress;

    /**
     * @description The public address of the database.
     *
     * @example rm-uf******p45.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $databasePublicAddress;

    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**
     *   **PostgreSQL**
     *   **Oracle**
     *   **SQLServer**
     *
     * @example MySQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description The database type. Valid values:
     *
     *   **Local**: on-premises database.
     *   **Rds**: ApsaraDB RDS instance.
     *   **PolarDB**: PolarDB cluster.
     *
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the ApsaraDB RDS instance.
     *
     * @example i-wz9225bhipya******
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The region ID of the ApsaraDB RDS instance.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $sourceInstanceRegionId;

    /**
     * @description The database status. Valid values:
     *
     *   **Normal**
     *   **Release**
     *
     * @example Normal
     *
     * @var string
     */
    public $sourceInstanceState;
    protected $_name = [
        'activeAddressType' => 'ActiveAddressType',
        'comment' => 'Comment',
        'databaseId' => 'DatabaseId',
        'databaseName' => 'DatabaseName',
        'databasePort' => 'DatabasePort',
        'databasePrivateAddress' => 'DatabasePrivateAddress',
        'databasePublicAddress' => 'DatabasePublicAddress',
        'databaseType' => 'DatabaseType',
        'source' => 'Source',
        'sourceInstanceId' => 'SourceInstanceId',
        'sourceInstanceRegionId' => 'SourceInstanceRegionId',
        'sourceInstanceState' => 'SourceInstanceState',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeAddressType) {
            $res['ActiveAddressType'] = $this->activeAddressType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->databasePort) {
            $res['DatabasePort'] = $this->databasePort;
        }
        if (null !== $this->databasePrivateAddress) {
            $res['DatabasePrivateAddress'] = $this->databasePrivateAddress;
        }
        if (null !== $this->databasePublicAddress) {
            $res['DatabasePublicAddress'] = $this->databasePublicAddress;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->sourceInstanceRegionId) {
            $res['SourceInstanceRegionId'] = $this->sourceInstanceRegionId;
        }
        if (null !== $this->sourceInstanceState) {
            $res['SourceInstanceState'] = $this->sourceInstanceState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveAddressType'])) {
            $model->activeAddressType = $map['ActiveAddressType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DatabasePort'])) {
            $model->databasePort = $map['DatabasePort'];
        }
        if (isset($map['DatabasePrivateAddress'])) {
            $model->databasePrivateAddress = $map['DatabasePrivateAddress'];
        }
        if (isset($map['DatabasePublicAddress'])) {
            $model->databasePublicAddress = $map['DatabasePublicAddress'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['SourceInstanceRegionId'])) {
            $model->sourceInstanceRegionId = $map['SourceInstanceRegionId'];
        }
        if (isset($map['SourceInstanceState'])) {
            $model->sourceInstanceState = $map['SourceInstanceState'];
        }

        return $model;
    }
}
