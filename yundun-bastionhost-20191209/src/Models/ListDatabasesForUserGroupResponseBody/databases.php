<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabasesForUserGroupResponseBody;

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
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The total number of database accounts returned.
     *
     * @example 2
     *
     * @var int
     */
    public $databaseAccountCount;

    /**
     * @description The ID of the database to which the database account belongs.
     *
     * @example 2
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The name of the database.
     *
     * @example MySQL0
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
     * @description The internal address of the database. The value is a domain name or an IP address.
     *
     * @example rm-bp1******
     *
     * @var string
     */
    public $databasePrivateAddress;

    /**
     * @description The public address of the database. The value is a domain name or an IP address.
     *
     * @example rm-uf65******
     *
     * @var string
     */
    public $databasePublicAddress;

    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**
     *   **Oracle**
     *   **PostgreSQL**
     *   **SQLServer**
     *
     * @example MySQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description The ID of the network domain where the database resides.
     *
     * @example 5
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @description The type of the database. Valid values:
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
     * @description The ID of the ApsaraDB RDS instance or PolarDB cluster.
     *
     * > No value is returned for this parameter if **Source** is set to **Local**.
     *
     * @example i-wz9c7mjxywmdmqk7q6e4
     *
     * @var string
     */
    public $sourceInstanceId;
    protected $_name = [
        'activeAddressType' => 'ActiveAddressType',
        'comment' => 'Comment',
        'databaseAccountCount' => 'DatabaseAccountCount',
        'databaseId' => 'DatabaseId',
        'databaseName' => 'DatabaseName',
        'databasePort' => 'DatabasePort',
        'databasePrivateAddress' => 'DatabasePrivateAddress',
        'databasePublicAddress' => 'DatabasePublicAddress',
        'databaseType' => 'DatabaseType',
        'networkDomainId' => 'NetworkDomainId',
        'source' => 'Source',
        'sourceInstanceId' => 'SourceInstanceId',
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
        if (null !== $this->databaseAccountCount) {
            $res['DatabaseAccountCount'] = $this->databaseAccountCount;
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
        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
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
        if (isset($map['DatabaseAccountCount'])) {
            $model->databaseAccountCount = $map['DatabaseAccountCount'];
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
        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }

        return $model;
    }
}
