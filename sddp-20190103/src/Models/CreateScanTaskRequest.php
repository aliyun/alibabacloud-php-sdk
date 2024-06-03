<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class CreateScanTaskRequest extends Model
{
    /**
     * @description The unique ID of the data asset, such as an instance, a database, and a bucket. You can call the [DescribeDataLimits](~~DescribeDataLimits~~) operation to query the unique ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $dataLimitId;

    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $featureType;

    /**
     * @description The interval between two consecutive custom scan tasks. Unit: days. Valid values: 1 to 2147483648.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $intervalDay;

    /**
     * @description The language of the content within the request and response.
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The data to be scanned in the Object Storage Service (OSS) bucket. Prefix match, suffix match, and regular expression match are supported.
     *
     * @example /test/test
     *
     * @var string
     */
    public $ossScanPath;

    /**
     * @description The type of the service to which the data assets to be scanned belong. Valid values include **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates OSS. The value 3 indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $resourceType;

    /**
     * @description The time when the scan task is executed next time. Unit: hours.
     *
     * This parameter is required.
     * @example 12
     *
     * @var int
     */
    public $runHour;

    /**
     * @description The time when the scan task is executed next time. Unit: minutes.
     *
     * This parameter is required.
     * @example 30
     *
     * @var int
     */
    public $runMinute;

    /**
     * @description The matching rule that specifies the scan scope of the custom scan task. This parameter takes effect only if you set the **ScanRangeContent** parameter. Valid values:
     *
     *   **0**: exact match
     *   **1**: prefix match
     *   **2**: suffix match
     *   **3**: regular expression match
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $scanRange;

    /**
     * @description The data to be scanned in a structured data asset. Prefix match, suffix match, and regular expression match are supported.
     *
     * This parameter is required.
     * @example datamask/
     *
     * @var string
     */
    public $scanRangeContent;

    /**
     * @description This parameter is deprecated.
     *
     * @example 39.170.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The name of the scan task.
     *
     * This parameter is required.
     * @example scan-test-sample****
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The account that is used to create the scan task.
     *
     * @example demo
     *
     * @var string
     */
    public $taskUserName;
    protected $_name = [
        'dataLimitId'      => 'DataLimitId',
        'featureType'      => 'FeatureType',
        'intervalDay'      => 'IntervalDay',
        'lang'             => 'Lang',
        'ossScanPath'      => 'OssScanPath',
        'resourceType'     => 'ResourceType',
        'runHour'          => 'RunHour',
        'runMinute'        => 'RunMinute',
        'scanRange'        => 'ScanRange',
        'scanRangeContent' => 'ScanRangeContent',
        'sourceIp'         => 'SourceIp',
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
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
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
