<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListDataSourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example utf8mb4
     *
     * @var string
     */
    public $charset;

    /**
     * @example cluster_name
     *
     * @var string
     */
    public $cluster;

    /**
     * @example null
     *
     * @var mixed
     */
    public $connExtraAttributes;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 2023-07-13T20:27:28.000+00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-07-13T20:37:28.000+00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example e_4w****v
     *
     * @var string
     */
    public $id;

    /**
     * @example xxx.xxx.xxx.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example RATION***1DBUTF11
     *
     * @var string
     */
    public $name;

    /**
     * @example Linux
     *
     * @var string
     */
    public $operatingSystem;

    /**
     * @example null
     *
     * @var string
     */
    public $oracleNlsLengthSemantics;

    /**
     * @example null
     *
     * @var string
     */
    public $oracleSid;

    /**
     * @example admin
     *
     * @var string
     */
    public $owner;

    /**
     * @example null
     *
     * @var string
     */
    public $partnerId;

    /**
     * @example 2883
     *
     * @var int
     */
    public $port;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @example 178641****05809
     *
     * @var string
     */
    public $resourceOwner;

    /**
     * @example MASTER
     *
     * @var string
     */
    public $role;

    /**
     * @example schema_name
     *
     * @var string
     */
    public $schema;

    /**
     * @example tenant_name
     *
     * @var string
     */
    public $tenant;

    /**
     * @example +08:00
     *
     * @var string
     */
    public $timezone;

    /**
     * @example MYSQL_PUBLIC
     *
     * @var string
     */
    public $type;

    /**
     * @example user_name
     *
     * @var string
     */
    public $userName;

    /**
     * @example 4.1.0
     *
     * @var string
     */
    public $version;

    /**
     * @example vpc_t4***
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'charset'                  => 'Charset',
        'cluster'                  => 'Cluster',
        'connExtraAttributes'      => 'ConnExtraAttributes',
        'description'              => 'Description',
        'gmtCreate'                => 'GmtCreate',
        'gmtModified'              => 'GmtModified',
        'id'                       => 'Id',
        'ip'                       => 'Ip',
        'name'                     => 'Name',
        'operatingSystem'          => 'OperatingSystem',
        'oracleNlsLengthSemantics' => 'OracleNlsLengthSemantics',
        'oracleSid'                => 'OracleSid',
        'owner'                    => 'Owner',
        'partnerId'                => 'PartnerId',
        'port'                     => 'Port',
        'region'                   => 'Region',
        'resourceOwner'            => 'ResourceOwner',
        'role'                     => 'Role',
        'schema'                   => 'Schema',
        'tenant'                   => 'Tenant',
        'timezone'                 => 'Timezone',
        'type'                     => 'Type',
        'userName'                 => 'UserName',
        'version'                  => 'Version',
        'vpcId'                    => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }
        if (null !== $this->cluster) {
            $res['Cluster'] = $this->cluster;
        }
        if (null !== $this->connExtraAttributes) {
            $res['ConnExtraAttributes'] = $this->connExtraAttributes;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operatingSystem) {
            $res['OperatingSystem'] = $this->operatingSystem;
        }
        if (null !== $this->oracleNlsLengthSemantics) {
            $res['OracleNlsLengthSemantics'] = $this->oracleNlsLengthSemantics;
        }
        if (null !== $this->oracleSid) {
            $res['OracleSid'] = $this->oracleSid;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->tenant) {
            $res['Tenant'] = $this->tenant;
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }
        if (isset($map['Cluster'])) {
            $model->cluster = $map['Cluster'];
        }
        if (isset($map['ConnExtraAttributes'])) {
            $model->connExtraAttributes = $map['ConnExtraAttributes'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperatingSystem'])) {
            $model->operatingSystem = $map['OperatingSystem'];
        }
        if (isset($map['OracleNlsLengthSemantics'])) {
            $model->oracleNlsLengthSemantics = $map['OracleNlsLengthSemantics'];
        }
        if (isset($map['OracleSid'])) {
            $model->oracleSid = $map['OracleSid'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['Tenant'])) {
            $model->tenant = $map['Tenant'];
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
