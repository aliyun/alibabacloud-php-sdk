<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class databaseInstances extends Model
{
    /**
     * @description The business status of the instance. Valid values:
     *
     *   normal
     *   expired
     *   overdue
     *
     * @example normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The billing method of the Simple Database Service instance. Set the value to PrePaid. This value indicates the subscription billing method.
     *
     * Default value: PrePaid.
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The number of vCPUs.
     *
     * @example 1
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The time when the instance was created. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-09-01T02:39:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The plan edition ID of the Simple Database Service instance. Valid values:
     *
     *   swas.db.c1m1s25: CNY 35/month.
     *   swas.db.c1m2s80: CNY 100/month.
     *   swas.db.c2m4s120: CNY 200/month.
     *   swas.db.c2m8s240: CNY 300/month.
     *
     * @example swas.db.c1m1s25
     *
     * @var string
     */
    public $databaseInstanceEdition;

    /**
     * @description The ID of the Simple Database Service instance.
     *
     * @example db-38263fa955774501a2ae1bdaed6f****
     *
     * @var string
     */
    public $databaseInstanceId;

    /**
     * @description The name of the Simple Database Service instance.
     *
     * @var string
     */
    public $databaseInstanceName;

    /**
     * @description The status of the Simple Database Service instance. Valid values:
     *
     *   Pending: The instance is being created.
     *   Restarting: The instance is being restarted.
     *   Running: The instance is running.
     *   Stopping: The instance is being stopped.
     *   Stopped: The instance is stopped.
     *   UPGRADING: The instance is being upgraded.
     *   DISABLED: The instance is disabled.
     *
     * @example Running
     *
     * @var string
     */
    public $databaseInstanceStatus;

    /**
     * @description The database engine version of the instance. Valid values:
     *
     *   5.7: MySQL 5.7.
     *   8.0: MySQL 8.0.
     *
     * @example 5.7
     *
     * @var string
     */
    public $databaseVersion;

    /**
     * @description The time when the instance expires. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * >  The time displayed in the Simple Application Server console is in the format of UTC+8.
     * @example 2022-10-01T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The memory size of the instance. Unit: GB.
     *
     * @example 1
     *
     * @var string
     */
    public $memory;

    /**
     * @description The private endpoint.
     *
     * @example rm-bp1d39opj7906****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $privateConnection;

    /**
     * @description The public endpoint.
     *
     * >  This parameter is displayed only after you apply for a public endpoint for the instance and a public endpoint is assigned to the instance. You can call [AllocatePublicConnection](https://help.aliyun.com/document_detail/451413.html) to apply for a public endpoint for the instance.
     * @example db-38263fa955774501a2ae1bdaed6f****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $publicConnection;

    /**
     * @description The region ID of the Simple Database Service instances.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The size of the enhanced SSD (ESSD). Unit: GB.
     *
     * @example 25
     *
     * @var int
     */
    public $storage;

    /**
     * @description The name of the super administrator account of the Simple Database Service instance.
     *
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
