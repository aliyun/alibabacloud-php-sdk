<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class CreateScanTaskRequest extends Model
{
    /**
     * @var int
     */
    public $dataLimitId;

    /**
     * @var int
     */
    public $intervalDay;

    /**
     * @var int
     */
    public $runHour;

    /**
     * @var int
     */
    public $runMinute;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskUserName;

    /**
     * @var string
     */
    public $ossScanPath;

    /**
     * @var int
     */
    public $scanRange;

    /**
     * @var string
     */
    public $scanRangeContent;

    /**
     * @var int
     */
    public $resourceType;
    protected $_name = [
        'dataLimitId'      => 'DataLimitId',
        'intervalDay'      => 'IntervalDay',
        'runHour'          => 'RunHour',
        'runMinute'        => 'RunMinute',
        'taskName'         => 'TaskName',
        'taskUserName'     => 'TaskUserName',
        'ossScanPath'      => 'OssScanPath',
        'scanRange'        => 'ScanRange',
        'scanRangeContent' => 'ScanRangeContent',
        'resourceType'     => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataLimitId) {
            $res['DataLimitId'] = $this->dataLimitId;
        }
        if (null !== $this->intervalDay) {
            $res['IntervalDay'] = $this->intervalDay;
        }
        if (null !== $this->runHour) {
            $res['RunHour'] = $this->runHour;
        }
        if (null !== $this->runMinute) {
            $res['RunMinute'] = $this->runMinute;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskUserName) {
            $res['TaskUserName'] = $this->taskUserName;
        }
        if (null !== $this->ossScanPath) {
            $res['OssScanPath'] = $this->ossScanPath;
        }
        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
        }
        if (null !== $this->scanRangeContent) {
            $res['ScanRangeContent'] = $this->scanRangeContent;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScanTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataLimitId'])) {
            $model->dataLimitId = $map['DataLimitId'];
        }
        if (isset($map['IntervalDay'])) {
            $model->intervalDay = $map['IntervalDay'];
        }
        if (isset($map['RunHour'])) {
            $model->runHour = $map['RunHour'];
        }
        if (isset($map['RunMinute'])) {
            $model->runMinute = $map['RunMinute'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskUserName'])) {
            $model->taskUserName = $map['TaskUserName'];
        }
        if (isset($map['OssScanPath'])) {
            $model->ossScanPath = $map['OssScanPath'];
        }
        if (isset($map['ScanRange'])) {
            $model->scanRange = $map['ScanRange'];
        }
        if (isset($map['ScanRangeContent'])) {
            $model->scanRangeContent = $map['ScanRangeContent'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
