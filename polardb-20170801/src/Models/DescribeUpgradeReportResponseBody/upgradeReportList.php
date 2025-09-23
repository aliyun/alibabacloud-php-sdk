<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeUpgradeReportResponseBody;

use AlibabaCloud\Dara\Model;

class upgradeReportList extends Model
{
    /**
     * @var string
     */
    public $checkTime;

    /**
     * @var string
     */
    public $dstVersion;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $srcInsName;

    /**
     * @var string
     */
    public $srcVersion;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $upgradeMode;
    protected $_name = [
        'checkTime' => 'CheckTime',
        'dstVersion' => 'DstVersion',
        'effectiveTime' => 'EffectiveTime',
        'endTime' => 'EndTime',
        'result' => 'Result',
        'srcInsName' => 'SrcInsName',
        'srcVersion' => 'SrcVersion',
        'startTime' => 'StartTime',
        'taskId' => 'TaskId',
        'upgradeMode' => 'UpgradeMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkTime) {
            $res['CheckTime'] = $this->checkTime;
        }

        if (null !== $this->dstVersion) {
            $res['DstVersion'] = $this->dstVersion;
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->srcInsName) {
            $res['SrcInsName'] = $this->srcInsName;
        }

        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->upgradeMode) {
            $res['UpgradeMode'] = $this->upgradeMode;
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
        if (isset($map['CheckTime'])) {
            $model->checkTime = $map['CheckTime'];
        }

        if (isset($map['DstVersion'])) {
            $model->dstVersion = $map['DstVersion'];
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['SrcInsName'])) {
            $model->srcInsName = $map['SrcInsName'];
        }

        if (isset($map['SrcVersion'])) {
            $model->srcVersion = $map['SrcVersion'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UpgradeMode'])) {
            $model->upgradeMode = $map['UpgradeMode'];
        }

        return $model;
    }
}
