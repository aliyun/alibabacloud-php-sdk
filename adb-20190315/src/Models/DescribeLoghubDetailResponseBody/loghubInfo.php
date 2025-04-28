<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoghubDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoghubDetailResponseBody\loghubInfo\logHubStores;

class loghubInfo extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

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
    public $deliverTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domainUrl;

    /**
     * @var bool
     */
    public $filterDirtyData;

    /**
     * @var logHubStores
     */
    public $logHubStores;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'DBType' => 'DBType',
        'deliverName' => 'DeliverName',
        'deliverTime' => 'DeliverTime',
        'description' => 'Description',
        'domainUrl' => 'DomainUrl',
        'filterDirtyData' => 'FilterDirtyData',
        'logHubStores' => 'LogHubStores',
        'logStoreName' => 'LogStoreName',
        'projectName' => 'ProjectName',
        'regionId' => 'RegionId',
        'schemaName' => 'SchemaName',
        'tableName' => 'TableName',
        'userName' => 'UserName',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->logHubStores) {
            $this->logHubStores->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['LogHubStores'] = null !== $this->logHubStores ? $this->logHubStores->toArray($noStream) : $this->logHubStores;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
