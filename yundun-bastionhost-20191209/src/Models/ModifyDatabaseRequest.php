<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyDatabaseRequest extends Model
{
    /**
     * @example Public
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @example tttttttt
     *
     * @var string
     */
    public $comment;

    /**
     * @example 11
     *
     * @var string
     */
    public $databaseId;

    /**
     * @example pgsql
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example 5433
     *
     * @var string
     */
    public $databasePort;

    /**
     * @example pc-bp169******
     *
     * @var string
     */
    public $databasePrivateAddress;

    /**
     * @example pgm-uf6c******
     *
     * @var string
     */
    public $databasePublicAddress;

    /**
     * @example bastionhost-cn-72137xe5n01
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 2
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example i-wz99nexqd62z3bvuvpz5
     *
     * @var string
     */
    public $sourceInstanceId;
    protected $_name = [
        'activeAddressType'      => 'ActiveAddressType',
        'comment'                => 'Comment',
        'databaseId'             => 'DatabaseId',
        'databaseName'           => 'DatabaseName',
        'databasePort'           => 'DatabasePort',
        'databasePrivateAddress' => 'DatabasePrivateAddress',
        'databasePublicAddress'  => 'DatabasePublicAddress',
        'instanceId'             => 'InstanceId',
        'networkDomainId'        => 'NetworkDomainId',
        'regionId'               => 'RegionId',
        'sourceInstanceId'       => 'SourceInstanceId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDatabaseRequest
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }

        return $model;
    }
}
