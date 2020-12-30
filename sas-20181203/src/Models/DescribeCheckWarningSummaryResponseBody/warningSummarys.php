<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class warningSummarys extends Model
{
    /**
     * @var int
     */
    public $lowWarningCount;

    /**
     * @var int
     */
    public $checkCount;

    /**
     * @var int
     */
    public $mediumWarningCount;

    /**
     * @var string
     */
    public $lastFoundTime;

    /**
     * @var int
     */
    public $riskId;

    /**
     * @var string
     */
    public $subTypeAlias;

    /**
     * @var int
     */
    public $warningMachineCount;

    /**
     * @var int
     */
    public $highWarningCount;

    /**
     * @var string
     */
    public $typeAlias;

    /**
     * @var string
     */
    public $riskName;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'lowWarningCount'     => 'LowWarningCount',
        'checkCount'          => 'CheckCount',
        'mediumWarningCount'  => 'MediumWarningCount',
        'lastFoundTime'       => 'LastFoundTime',
        'riskId'              => 'RiskId',
        'subTypeAlias'        => 'SubTypeAlias',
        'warningMachineCount' => 'WarningMachineCount',
        'highWarningCount'    => 'HighWarningCount',
        'typeAlias'           => 'TypeAlias',
        'riskName'            => 'RiskName',
        'level'               => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lowWarningCount) {
            $res['LowWarningCount'] = $this->lowWarningCount;
        }
        if (null !== $this->checkCount) {
            $res['CheckCount'] = $this->checkCount;
        }
        if (null !== $this->mediumWarningCount) {
            $res['MediumWarningCount'] = $this->mediumWarningCount;
        }
        if (null !== $this->lastFoundTime) {
            $res['LastFoundTime'] = $this->lastFoundTime;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->subTypeAlias) {
            $res['SubTypeAlias'] = $this->subTypeAlias;
        }
        if (null !== $this->warningMachineCount) {
            $res['WarningMachineCount'] = $this->warningMachineCount;
        }
        if (null !== $this->highWarningCount) {
            $res['HighWarningCount'] = $this->highWarningCount;
        }
        if (null !== $this->typeAlias) {
            $res['TypeAlias'] = $this->typeAlias;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (isset($map['LowWarningCount'])) {
            $model->lowWarningCount = $map['LowWarningCount'];
        }
        if (isset($map['CheckCount'])) {
            $model->checkCount = $map['CheckCount'];
        }
        if (isset($map['MediumWarningCount'])) {
            $model->mediumWarningCount = $map['MediumWarningCount'];
        }
        if (isset($map['LastFoundTime'])) {
            $model->lastFoundTime = $map['LastFoundTime'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['SubTypeAlias'])) {
            $model->subTypeAlias = $map['SubTypeAlias'];
        }
        if (isset($map['WarningMachineCount'])) {
            $model->warningMachineCount = $map['WarningMachineCount'];
        }
        if (isset($map['HighWarningCount'])) {
            $model->highWarningCount = $map['HighWarningCount'];
        }
        if (isset($map['TypeAlias'])) {
            $model->typeAlias = $map['TypeAlias'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
