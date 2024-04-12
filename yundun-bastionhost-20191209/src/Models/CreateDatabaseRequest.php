<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseRequest extends Model
{
    /**
     * @example Public
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @example cpp
     *
     * @var string
     */
    public $comment;

    /**
     * @example Oracle
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example 5433
     *
     * @var int
     */
    public $databasePort;

    /**
     * @example pgm-uf6o******
     *
     * @var string
     */
    public $databasePrivateAddress;

    /**
     * @example rm-uf65251k51******
     *
     * @var string
     */
    public $databasePublicAddress;

    /**
     * @example MySQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @example bastionhost-cn-7mz2g5hu20e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @example Cluster
     *
     * @var string
     */
    public $polarDBEndpointType;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @example i-bp19ienyt0yax748****
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $sourceInstanceRegionId;
    protected $_name = [
        'activeAddressType'      => 'ActiveAddressType',
        'comment'                => 'Comment',
        'databaseName'           => 'DatabaseName',
        'databasePort'           => 'DatabasePort',
        'databasePrivateAddress' => 'DatabasePrivateAddress',
        'databasePublicAddress'  => 'DatabasePublicAddress',
        'databaseType'           => 'DatabaseType',
        'instanceId'             => 'InstanceId',
        'networkDomainId'        => 'NetworkDomainId',
        'polarDBEndpointType'    => 'PolarDBEndpointType',
        'regionId'               => 'RegionId',
        'source'                 => 'Source',
        'sourceInstanceId'       => 'SourceInstanceId',
        'sourceInstanceRegionId' => 'SourceInstanceRegionId',
    ];

    public function validate()
    {
    }

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
