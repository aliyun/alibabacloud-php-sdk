<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListDataSourceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $charset;

    /**
     * @var string
     */
    public $cluster;

    /**
     * @var mixed
     */
    public $connExtraAttributes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operatingSystem;

    /**
     * @var string
     */
    public $oracleNlsLengthSemantics;

    /**
     * @var string
     */
    public $oracleSid;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $partnerId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceOwner;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $tenant;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'charset' => 'Charset',
        'cluster' => 'Cluster',
        'connExtraAttributes' => 'ConnExtraAttributes',
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'ip' => 'Ip',
        'name' => 'Name',
        'operatingSystem' => 'OperatingSystem',
        'oracleNlsLengthSemantics' => 'OracleNlsLengthSemantics',
        'oracleSid' => 'OracleSid',
        'owner' => 'Owner',
        'partnerId' => 'PartnerId',
        'port' => 'Port',
        'region' => 'Region',
        'resourceOwner' => 'ResourceOwner',
        'role' => 'Role',
        'schema' => 'Schema',
        'tenant' => 'Tenant',
        'timezone' => 'Timezone',
        'type' => 'Type',
        'userName' => 'UserName',
        'version' => 'Version',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
