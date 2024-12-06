<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoghubDetailResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoghubDetailResponseBody\loghubInfo\logHubStores;
use AlibabaCloud\Tea\Model;

class loghubInfo extends Model
{
    /**
     * @example am-8vbs48m7553du1gz2
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example rds
     *
     * @var string
     */
    public $DBType;

    /**
     * @example hub-pay-callback-ykt
     *
     * @var string
     */
    public $deliverName;

    /**
     * @example 2024-12-06\\"T\\"10:15\\"Z\\"
     *
     * @var string
     */
    public $deliverTime;

    /**
     * @example aaa
     *
     * @var string
     */
    public $description;

    /**
     * @example am-bp1p38m2c26s7hpk690650.ads.aliyuncs.com
     *
     * @var string
     */
    public $domainUrl;

    /**
     * @example true
     *
     * @var bool
     */
    public $filterDirtyData;

    /**
     * @var logHubStores
     */
    public $logHubStores;

    /**
     * @example device_login
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @example test-adb
     *
     * @var string
     */
    public $projectName;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @example cbd_bi
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example test2
     *
     * @var string
     */
    public $tableName;

    /**
     * @example test
     *
     * @var string
     */
    public $userName;

    /**
     * @example cn-hangzhou-k
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBClusterId'     => 'DBClusterId',
        'DBType'          => 'DBType',
        'deliverName'     => 'DeliverName',
        'deliverTime'     => 'DeliverTime',
        'description'     => 'Description',
        'domainUrl'       => 'DomainUrl',
        'filterDirtyData' => 'FilterDirtyData',
        'logHubStores'    => 'LogHubStores',
        'logStoreName'    => 'LogStoreName',
        'projectName'     => 'ProjectName',
        'regionId'        => 'RegionId',
        'schemaName'      => 'SchemaName',
        'tableName'       => 'TableName',
        'userName'        => 'UserName',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->deliverName) {
            $res['DeliverName'] = $this->deliverName;
        }
        if (null !== $this->deliverTime) {
            $res['DeliverTime'] = $this->deliverTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainUrl) {
            $res['DomainUrl'] = $this->domainUrl;
        }
        if (null !== $this->filterDirtyData) {
            $res['FilterDirtyData'] = $this->filterDirtyData;
        }
        if (null !== $this->logHubStores) {
            $res['LogHubStores'] = null !== $this->logHubStores ? $this->logHubStores->toMap() : null;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loghubInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DeliverName'])) {
            $model->deliverName = $map['DeliverName'];
        }
        if (isset($map['DeliverTime'])) {
            $model->deliverTime = $map['DeliverTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainUrl'])) {
            $model->domainUrl = $map['DomainUrl'];
        }
        if (isset($map['FilterDirtyData'])) {
            $model->filterDirtyData = $map['FilterDirtyData'];
        }
        if (isset($map['LogHubStores'])) {
            $model->logHubStores = logHubStores::fromMap($map['LogHubStores']);
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
