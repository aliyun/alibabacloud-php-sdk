<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class warningSummarys extends Model
{
    /**
     * @description The number of check items.
     *
     * @example 10
     *
     * @var int
     */
    public $checkCount;

    /**
     * @description Indicates whether the risk item can be exploited. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $checkExploit;

    /**
     * @description Indicates  whether the risk item is a container runtime risk item. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $containerRisk;

    /**
     * @description Indicates whether the risk item is a database risk item. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $databaseRisk;

    /**
     * @description The number of high-risk items.
     *
     * @example 1
     *
     * @var int
     */
    public $highWarningCount;

    /**
     * @description The time when the last baseline check was performed.
     *
     * @example 2019-01-01 12:23:00
     *
     * @var string
     */
    public $lastFoundTime;

    /**
     * @description The risk level of the risk item. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $level;

    /**
     * @description The number of low-risk items.
     *
     * @example 3
     *
     * @var int
     */
    public $lowWarningCount;

    /**
     * @description The number of medium-risk items.
     *
     * @example 2
     *
     * @var int
     */
    public $mediumWarningCount;

    /**
     * @description The ID of the risk item.
     *
     * @example 118
     *
     * @var int
     */
    public $riskId;

    /**
     * @description The name of the risk item.
     *
     * @example Redis
     *
     * @var string
     */
    public $riskName;

    /**
     * @description The level-2 type of the risk item.
     *
     * @example Redis
     *
     * @var string
     */
    public $subTypeAlias;

    /**
     * @description The level-1 type of the check item. Examples: database, system, weak password, and middleware.
     *
     * @example databases
     *
     * @var string
     */
    public $typeAlias;

    /**
     * @description The number of assets on which risk items are detected.
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
