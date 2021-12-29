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
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $ossScanPath;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var int
     */
    public $runHour;

    /**
     * @var int
     */
    public $runMinute;

    /**
     * @var int
     */
    public $scanRange;

    /**
     * @var string
     */
    public $scanRangeContent;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskUserName;
    protected $_name = [
        'dataLimitId'      => 'DataLimitId',
        'intervalDay'      => 'IntervalDay',
        'lang'             => 'Lang',
        'ossScanPath'      => 'OssScanPath',
        'resourceType'     => 'ResourceType',
        'runHour'          => 'RunHour',
        'runMinute'        => 'RunMinute',
        'scanRange'        => 'ScanRange',
        'scanRangeContent' => 'ScanRangeContent',
        'taskName'         => 'TaskName',
        'taskUserName'     => 'TaskUserName',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->ossScanPath) {
            $res['OssScanPath'] = $this->ossScanPath;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->runHour) {
            $res['RunHour'] = $this->runHour;
        }
        if (null !== $this->runMinute) {
            $res['RunMinute'] = $this->runMinute;
        }
        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
        }
        if (null !== $this->scanRangeContent) {
            $res['ScanRangeContent'] = $this->scanRangeContent;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskUserName) {
            $res['TaskUserName'] = $this->taskUserName;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OssScanPath'])) {
            $model->ossScanPath = $map['OssScanPath'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RunHour'])) {
            $model->runHour = $map['RunHour'];
        }
        if (isset($map['RunMinute'])) {
            $model->runMinute = $map['RunMinute'];
        }
        if (isset($map['ScanRange'])) {
            $model->scanRange = $map['ScanRange'];
        }
        if (isset($map['ScanRangeContent'])) {
            $model->scanRangeContent = $map['ScanRangeContent'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskUserName'])) {
            $model->taskUserName = $map['TaskUserName'];
        }

        return $model;
    }
}
