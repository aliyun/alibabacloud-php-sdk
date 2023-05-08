<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class warningSummarys extends Model
{
    /**
     * @description The statistics of check items.
     *
     * @example 10
     *
     * @var int
     */
    public $checkCount;

    /**
     * @example false
     *
     * @var bool
     */
    public $checkExploit;

    /**
     * @example false
     *
     * @var bool
     */
    public $containerRisk;

    /**
     * @example false
     *
     * @var bool
     */
    public $databaseRisk;

    /**
     * @example 1
     *
     * @var int
     */
    public $highWarningCount;

    /**
     * @description The number of low-risk items.
     *
     * @example 2019-01-01 12:23:00
     *
     * @var string
     */
    public $lastFoundTime;

    /**
     * @example high
     *
     * @var string
     */
    public $level;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 3
     *
     * @var int
     */
    public $lowWarningCount;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 2
     *
     * @var int
     */
    public $mediumWarningCount;

    /**
     * @description The number of check items returned on the current page.
     *
     * @example 118
     *
     * @var int
     */
    public $riskId;

    /**
     * @example Redis
     *
     * @var string
     */
    public $riskName;

    /**
     * @description Queries the statistical information about baseline check results. The information includes the number of servers on which a baseline check is performed, the number of baseline check items, and the pass rate of check items in the last baseline check.
     *
     * @example Redis
     *
     * @var string
     */
    public $subTypeAlias;

    /**
     * @example databases
     *
     * @var string
     */
    public $typeAlias;

    /**
     * @description DescribeCheckWarningSummary
     *
     * @example 11
     *
     * @var int
     */
    public $warningMachineCount;
    protected $_name = [
        'checkCount'          => 'CheckCount',
        'checkExploit'        => 'CheckExploit',
        'containerRisk'       => 'ContainerRisk',
        'databaseRisk'        => 'DatabaseRisk',
        'highWarningCount'    => 'HighWarningCount',
        'lastFoundTime'       => 'LastFoundTime',
        'level'               => 'Level',
        'lowWarningCount'     => 'LowWarningCount',
        'mediumWarningCount'  => 'MediumWarningCount',
        'riskId'              => 'RiskId',
        'riskName'            => 'RiskName',
        'subTypeAlias'        => 'SubTypeAlias',
        'typeAlias'           => 'TypeAlias',
        'warningMachineCount' => 'WarningMachineCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkCount) {
            $res['CheckCount'] = $this->checkCount;
        }
        if (null !== $this->checkExploit) {
            $res['CheckExploit'] = $this->checkExploit;
        }
        if (null !== $this->containerRisk) {
            $res['ContainerRisk'] = $this->containerRisk;
        }
        if (null !== $this->databaseRisk) {
            $res['DatabaseRisk'] = $this->databaseRisk;
        }
        if (null !== $this->highWarningCount) {
            $res['HighWarningCount'] = $this->highWarningCount;
        }
        if (null !== $this->lastFoundTime) {
            $res['LastFoundTime'] = $this->lastFoundTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->lowWarningCount) {
            $res['LowWarningCount'] = $this->lowWarningCount;
        }
        if (null !== $this->mediumWarningCount) {
            $res['MediumWarningCount'] = $this->mediumWarningCount;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }
        if (null !== $this->subTypeAlias) {
            $res['SubTypeAlias'] = $this->subTypeAlias;
        }
        if (null !== $this->typeAlias) {
            $res['TypeAlias'] = $this->typeAlias;
        }
        if (null !== $this->warningMachineCount) {
            $res['WarningMachineCount'] = $this->warningMachineCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warningSummarys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckCount'])) {
            $model->checkCount = $map['CheckCount'];
        }
        if (isset($map['CheckExploit'])) {
            $model->checkExploit = $map['CheckExploit'];
        }
        if (isset($map['ContainerRisk'])) {
            $model->containerRisk = $map['ContainerRisk'];
        }
        if (isset($map['DatabaseRisk'])) {
            $model->databaseRisk = $map['DatabaseRisk'];
        }
        if (isset($map['HighWarningCount'])) {
            $model->highWarningCount = $map['HighWarningCount'];
        }
        if (isset($map['LastFoundTime'])) {
            $model->lastFoundTime = $map['LastFoundTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['LowWarningCount'])) {
            $model->lowWarningCount = $map['LowWarningCount'];
        }
        if (isset($map['MediumWarningCount'])) {
            $model->mediumWarningCount = $map['MediumWarningCount'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }
        if (isset($map['SubTypeAlias'])) {
            $model->subTypeAlias = $map['SubTypeAlias'];
        }
        if (isset($map['TypeAlias'])) {
            $model->typeAlias = $map['TypeAlias'];
        }
        if (isset($map['WarningMachineCount'])) {
            $model->warningMachineCount = $map['WarningMachineCount'];
        }

        return $model;
    }
}
