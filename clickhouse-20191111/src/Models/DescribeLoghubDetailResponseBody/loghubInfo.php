<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLoghubDetailResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLoghubDetailResponseBody\loghubInfo\logHubStores;
use AlibabaCloud\Tea\Model;

class loghubInfo extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $accessSecret;

    /**
     * @var logHubStores
     */
    public $logHubStores;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $deliverName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $filterDirtyData;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $domainUrl;

    /**
     * @var string
     */
    public $deliverTime;
    protected $_name = [
        'accessKey'       => 'AccessKey',
        'tableName'       => 'TableName',
        'accessSecret'    => 'AccessSecret',
        'logHubStores'    => 'LogHubStores',
        'projectName'     => 'ProjectName',
        'schemaName'      => 'SchemaName',
        'DBType'          => 'DBType',
        'deliverName'     => 'DeliverName',
        'regionId'        => 'RegionId',
        'password'        => 'Password',
        'DBClusterId'     => 'DBClusterId',
        'description'     => 'Description',
        'filterDirtyData' => 'FilterDirtyData',
        'zoneId'          => 'ZoneId',
        'logStoreName'    => 'LogStoreName',
        'userName'        => 'UserName',
        'domainUrl'       => 'DomainUrl',
        'deliverTime'     => 'DeliverTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->accessSecret) {
            $res['AccessSecret'] = $this->accessSecret;
        }
        if (null !== $this->logHubStores) {
            $res['LogHubStores'] = null !== $this->logHubStores ? $this->logHubStores->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->deliverName) {
            $res['DeliverName'] = $this->deliverName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->filterDirtyData) {
            $res['FilterDirtyData'] = $this->filterDirtyData;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->domainUrl) {
            $res['DomainUrl'] = $this->domainUrl;
        }
        if (null !== $this->deliverTime) {
            $res['DeliverTime'] = $this->deliverTime;
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
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['AccessSecret'])) {
            $model->accessSecret = $map['AccessSecret'];
        }
        if (isset($map['LogHubStores'])) {
            $model->logHubStores = logHubStores::fromMap($map['LogHubStores']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DeliverName'])) {
            $model->deliverName = $map['DeliverName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FilterDirtyData'])) {
            $model->filterDirtyData = $map['FilterDirtyData'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['DomainUrl'])) {
            $model->domainUrl = $map['DomainUrl'];
        }
        if (isset($map['DeliverTime'])) {
            $model->deliverTime = $map['DeliverTime'];
        }

        return $model;
    }
}
