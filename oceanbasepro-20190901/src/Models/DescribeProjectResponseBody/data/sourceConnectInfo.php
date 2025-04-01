<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data;

use AlibabaCloud\Dara\Model;

class sourceConnectInfo extends Model
{
    /**
     * @var string
     */
    public $charset;

    /**
     * @var mixed
     */
    public $connExtraAttributes;

    /**
     * @var string
     */
    public $connectionInfo;

    /**
     * @var string
     */
    public $dbEngine;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string
     */
    public $endpointSide;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $nlsLengthSemantics;

    /**
     * @var string
     */
    public $ocpName;

    /**
     * @var string
     */
    public $operatingSystem;

    /**
     * @var string
     */
    public $owner;

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
    public $timezone;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'charset' => 'Charset',
        'connExtraAttributes' => 'ConnExtraAttributes',
        'connectionInfo' => 'ConnectionInfo',
        'dbEngine' => 'DbEngine',
        'endpointId' => 'EndpointId',
        'endpointName' => 'EndpointName',
        'endpointSide' => 'EndpointSide',
        'host' => 'Host',
        'id' => 'Id',
        'nlsLengthSemantics' => 'NlsLengthSemantics',
        'ocpName' => 'OcpName',
        'operatingSystem' => 'OperatingSystem',
        'owner' => 'Owner',
        'port' => 'Port',
        'region' => 'Region',
        'resourceOwner' => 'ResourceOwner',
        'timezone' => 'Timezone',
        'username' => 'Username',
        'version' => 'Version',
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

        if (null !== $this->connExtraAttributes) {
            $res['ConnExtraAttributes'] = $this->connExtraAttributes;
        }

        if (null !== $this->connectionInfo) {
            $res['ConnectionInfo'] = $this->connectionInfo;
        }

        if (null !== $this->dbEngine) {
            $res['DbEngine'] = $this->dbEngine;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }

        if (null !== $this->endpointSide) {
            $res['EndpointSide'] = $this->endpointSide;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->nlsLengthSemantics) {
            $res['NlsLengthSemantics'] = $this->nlsLengthSemantics;
        }

        if (null !== $this->ocpName) {
            $res['OcpName'] = $this->ocpName;
        }

        if (null !== $this->operatingSystem) {
            $res['OperatingSystem'] = $this->operatingSystem;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['ConnExtraAttributes'])) {
            $model->connExtraAttributes = $map['ConnExtraAttributes'];
        }

        if (isset($map['ConnectionInfo'])) {
            $model->connectionInfo = $map['ConnectionInfo'];
        }

        if (isset($map['DbEngine'])) {
            $model->dbEngine = $map['DbEngine'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }

        if (isset($map['EndpointSide'])) {
            $model->endpointSide = $map['EndpointSide'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['NlsLengthSemantics'])) {
            $model->nlsLengthSemantics = $map['NlsLengthSemantics'];
        }

        if (isset($map['OcpName'])) {
            $model->ocpName = $map['OcpName'];
        }

        if (isset($map['OperatingSystem'])) {
            $model->operatingSystem = $map['OperatingSystem'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
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

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
