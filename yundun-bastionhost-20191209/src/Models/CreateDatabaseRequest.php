<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseRequest extends Model
{
    /**
     * @description The address type of the database to add. Valid values:
     *
     *   Public
     *   Private
     *
     * This parameter is required.
     *
     * @example Public
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @description The remarks of the database to add. The remarks can be up to 500 characters in length.
     *
     * @example cpp
     *
     * @var string
     */
    public $comment;

    /**
     * @description The name of the database to add. This parameter is required if Source is set to **Local**.
     *
     * @example Oracle
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The port of the database. This parameter is required if Source is set to **Local**.
     *
     * @example 5433
     *
     * @var int
     */
    public $databasePort;

    /**
     * @description The internal IP address of the database. Specify an IPv4 address or a domain name.
     *
     * >  This parameter is required if ActiveAddressType is set to Private.
     *
     * @example pgm-uf6o******
     *
     * @var string
     */
    public $databasePrivateAddress;

    /**
     * @description The public IP address of the database. Specify an IPv4 address or a domain name.
     *
     * >  This parameter is required if ActiveAddressType is set to Public.
     *
     * @example rm-uf65251k51******
     *
     * @var string
     */
    public $databasePublicAddress;

    /**
     * @description The type of the database engine. Valid values:
     *
     *   **MySQL**
     *   **Oracle**
     *   **PostgreSQL**
     *   **SQLServer**
     *
     * This parameter is required.
     *
     * @example MySQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description The bastion host ID.
     *
     * >  You can call the [DescribeInstances](https://help.aliyun.com/document_detail/153281.html) operation to query the bastion host ID.
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-7mz2g5hu20e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the network domain to which the database to add belongs.
     *
     * >  You can call the [ListNetworkDomains](https://help.aliyun.com/document_detail/2758827.html) operation to query the network domain ID.
     *
     * @example 1
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @description The endpoint type of the PolarDB database. This parameter is required if Source is set to PolarDB. Valid values:
     *
     *   Cluster
     *   Primary
     *
     * @example Cluster
     *
     * @var string
     */
    public $polarDBEndpointType;

    /**
     * @description The region ID of the bastion host.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the database to add. Valid values:
     *
     *   Local: on-premises database.
     *   Rds: ApsaraDB RDS instance.
     *   PolarDB: PolarDB cluster.
     *
     * This parameter is required.
     *
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @description The instance ID of the database to add.
     *
     * > This parameter is required if **Source** is set to **Rds** or **PolarDB**.
     *
     * @example i-bp19ienyt0yax748****
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The region ID of the database to add.
     *
     * >  This parameter is required if **Source** is set to **Rds** or **PolarDB**.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $sourceInstanceRegionId;
    protected $_name = [
        'activeAddressType' => 'ActiveAddressType',
        'comment' => 'Comment',
        'databaseName' => 'DatabaseName',
        'databasePort' => 'DatabasePort',
        'databasePrivateAddress' => 'DatabasePrivateAddress',
        'databasePublicAddress' => 'DatabasePublicAddress',
        'databaseType' => 'DatabaseType',
        'instanceId' => 'InstanceId',
        'networkDomainId' => 'NetworkDomainId',
        'polarDBEndpointType' => 'PolarDBEndpointType',
        'regionId' => 'RegionId',
        'source' => 'Source',
        'sourceInstanceId' => 'SourceInstanceId',
        'sourceInstanceRegionId' => 'SourceInstanceRegionId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }
        if (null !== $this->polarDBEndpointType) {
            $res['PolarDBEndpointType'] = $this->polarDBEndpointType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatabaseRequest
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }
        if (isset($map['PolarDBEndpointType'])) {
            $model->polarDBEndpointType = $map['PolarDBEndpointType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
