<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class databaseInstances extends Model
{
    /**
     * @example normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 1
     *
     * @var string
     */
    public $cpu;

    /**
     * @example 2022-09-01T02:39:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example swas.db.c1m1s25
     *
     * @var string
     */
    public $databaseInstanceEdition;

    /**
     * @example db-38263fa955774501a2ae1bdaed6f****
     *
     * @var string
     */
    public $databaseInstanceId;

    /**
     * @var string
     */
    public $databaseInstanceName;

    /**
     * @example Running
     *
     * @var string
     */
    public $databaseInstanceStatus;

    /**
     * @example 5.7
     *
     * @var string
     */
    public $databaseVersion;

    /**
     * @example 2022-10-01T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $memory;

    /**
     * @example rm-bp1d39opj7906****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $privateConnection;

    /**
     * @example db-38263fa955774501a2ae1bdaed6f****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $publicConnection;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 25
     *
     * @var int
     */
    public $storage;

    /**
     * @example administrator
     *
     * @var string
     */
    public $superAccountName;
    protected $_name = [
        'businessStatus'          => 'BusinessStatus',
        'chargeType'              => 'ChargeType',
        'cpu'                     => 'Cpu',
        'creationTime'            => 'CreationTime',
        'databaseInstanceEdition' => 'DatabaseInstanceEdition',
        'databaseInstanceId'      => 'DatabaseInstanceId',
        'databaseInstanceName'    => 'DatabaseInstanceName',
        'databaseInstanceStatus'  => 'DatabaseInstanceStatus',
        'databaseVersion'         => 'DatabaseVersion',
        'expiredTime'             => 'ExpiredTime',
        'memory'                  => 'Memory',
        'privateConnection'       => 'PrivateConnection',
        'publicConnection'        => 'PublicConnection',
        'regionId'                => 'RegionId',
        'storage'                 => 'Storage',
        'superAccountName'        => 'SuperAccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->databaseInstanceEdition) {
            $res['DatabaseInstanceEdition'] = $this->databaseInstanceEdition;
        }
        if (null !== $this->databaseInstanceId) {
            $res['DatabaseInstanceId'] = $this->databaseInstanceId;
        }
        if (null !== $this->databaseInstanceName) {
            $res['DatabaseInstanceName'] = $this->databaseInstanceName;
        }
        if (null !== $this->databaseInstanceStatus) {
            $res['DatabaseInstanceStatus'] = $this->databaseInstanceStatus;
        }
        if (null !== $this->databaseVersion) {
            $res['DatabaseVersion'] = $this->databaseVersion;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->privateConnection) {
            $res['PrivateConnection'] = $this->privateConnection;
        }
        if (null !== $this->publicConnection) {
            $res['PublicConnection'] = $this->publicConnection;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->superAccountName) {
            $res['SuperAccountName'] = $this->superAccountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DatabaseInstanceEdition'])) {
            $model->databaseInstanceEdition = $map['DatabaseInstanceEdition'];
        }
        if (isset($map['DatabaseInstanceId'])) {
            $model->databaseInstanceId = $map['DatabaseInstanceId'];
        }
        if (isset($map['DatabaseInstanceName'])) {
            $model->databaseInstanceName = $map['DatabaseInstanceName'];
        }
        if (isset($map['DatabaseInstanceStatus'])) {
            $model->databaseInstanceStatus = $map['DatabaseInstanceStatus'];
        }
        if (isset($map['DatabaseVersion'])) {
            $model->databaseVersion = $map['DatabaseVersion'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['PrivateConnection'])) {
            $model->privateConnection = $map['PrivateConnection'];
        }
        if (isset($map['PublicConnection'])) {
            $model->publicConnection = $map['PublicConnection'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['SuperAccountName'])) {
            $model->superAccountName = $map['SuperAccountName'];
        }

        return $model;
    }
}
