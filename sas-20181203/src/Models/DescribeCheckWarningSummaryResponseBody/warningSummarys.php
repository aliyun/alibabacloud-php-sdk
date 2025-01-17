<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class warningSummarys extends Model
{
    /**
     * @var int
     */
    public $checkCount;
    /**
     * @var bool
     */
    public $checkExploit;
    /**
     * @var bool
     */
    public $containerRisk;
    /**
     * @var bool
     */
    public $databaseRisk;
    /**
     * @var int
     */
    public $highWarningCount;
    /**
     * @var string
     */
    public $lastFoundTime;
    /**
     * @var string
     */
    public $level;
    /**
     * @var int
     */
    public $lowWarningCount;
    /**
     * @var int
     */
    public $mediumWarningCount;
    /**
     * @var int
     */
    public $riskId;
    /**
     * @var string
     */
    public $riskName;
    /**
     * @var string
     */
    public $subTypeAlias;
    /**
     * @var string
     */
    public $typeAlias;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
