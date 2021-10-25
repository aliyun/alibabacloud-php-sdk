<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DownloadDiagnosisRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $queryCondition;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $minPeakMemory;

    /**
     * @var int
     */
    public $maxPeakMemory;

    /**
     * @var int
     */
    public $minScanSize;

    /**
     * @var int
     */
    public $maxScanSize;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'DBClusterId'    => 'DBClusterId',
        'startTime'      => 'StartTime',
        'endTime'        => 'EndTime',
        'regionId'       => 'RegionId',
        'queryCondition' => 'QueryCondition',
        'keyword'        => 'Keyword',
        'minPeakMemory'  => 'MinPeakMemory',
        'maxPeakMemory'  => 'MaxPeakMemory',
        'minScanSize'    => 'MinScanSize',
        'maxScanSize'    => 'MaxScanSize',
        'resourceGroup'  => 'ResourceGroup',
        'userName'       => 'UserName',
        'database'       => 'Database',
        'clientIp'       => 'ClientIp',
        'lang'           => 'Lang',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->queryCondition) {
            $res['QueryCondition'] = $this->queryCondition;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->minPeakMemory) {
            $res['MinPeakMemory'] = $this->minPeakMemory;
        }
        if (null !== $this->maxPeakMemory) {
            $res['MaxPeakMemory'] = $this->maxPeakMemory;
        }
        if (null !== $this->minScanSize) {
            $res['MinScanSize'] = $this->minScanSize;
        }
        if (null !== $this->maxScanSize) {
            $res['MaxScanSize'] = $this->maxScanSize;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadDiagnosisRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['QueryCondition'])) {
            $model->queryCondition = $map['QueryCondition'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MinPeakMemory'])) {
            $model->minPeakMemory = $map['MinPeakMemory'];
        }
        if (isset($map['MaxPeakMemory'])) {
            $model->maxPeakMemory = $map['MaxPeakMemory'];
        }
        if (isset($map['MinScanSize'])) {
            $model->minScanSize = $map['MinScanSize'];
        }
        if (isset($map['MaxScanSize'])) {
            $model->maxScanSize = $map['MaxScanSize'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
