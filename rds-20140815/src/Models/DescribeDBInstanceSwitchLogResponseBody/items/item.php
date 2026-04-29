<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceSwitchLogResponseBody\items;

use AlibabaCloud\Dara\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $affectedSessions;

    /**
     * @var string
     */
    public $HAStatus;

    /**
     * @var string
     */
    public $switchCauseCode;

    /**
     * @var string
     */
    public $switchCauseDetail;

    /**
     * @var string
     */
    public $switchFinishTime;

    /**
     * @var string
     */
    public $switchId;

    /**
     * @var string
     */
    public $switchStartTime;

    /**
     * @var string
     */
    public $totalSessions;
    protected $_name = [
        'affectedSessions' => 'AffectedSessions',
        'HAStatus' => 'HAStatus',
        'switchCauseCode' => 'SwitchCauseCode',
        'switchCauseDetail' => 'SwitchCauseDetail',
        'switchFinishTime' => 'SwitchFinishTime',
        'switchId' => 'SwitchId',
        'switchStartTime' => 'SwitchStartTime',
        'totalSessions' => 'TotalSessions',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedSessions) {
            $res['AffectedSessions'] = $this->affectedSessions;
        }

        if (null !== $this->HAStatus) {
            $res['HAStatus'] = $this->HAStatus;
        }

        if (null !== $this->switchCauseCode) {
            $res['SwitchCauseCode'] = $this->switchCauseCode;
        }

        if (null !== $this->switchCauseDetail) {
            $res['SwitchCauseDetail'] = $this->switchCauseDetail;
        }

        if (null !== $this->switchFinishTime) {
            $res['SwitchFinishTime'] = $this->switchFinishTime;
        }

        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }

        if (null !== $this->switchStartTime) {
            $res['SwitchStartTime'] = $this->switchStartTime;
        }

        if (null !== $this->totalSessions) {
            $res['TotalSessions'] = $this->totalSessions;
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
        if (isset($map['AffectedSessions'])) {
            $model->affectedSessions = $map['AffectedSessions'];
        }

        if (isset($map['HAStatus'])) {
            $model->HAStatus = $map['HAStatus'];
        }

        if (isset($map['SwitchCauseCode'])) {
            $model->switchCauseCode = $map['SwitchCauseCode'];
        }

        if (isset($map['SwitchCauseDetail'])) {
            $model->switchCauseDetail = $map['SwitchCauseDetail'];
        }

        if (isset($map['SwitchFinishTime'])) {
            $model->switchFinishTime = $map['SwitchFinishTime'];
        }

        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }

        if (isset($map['SwitchStartTime'])) {
            $model->switchStartTime = $map['SwitchStartTime'];
        }

        if (isset($map['TotalSessions'])) {
            $model->totalSessions = $map['TotalSessions'];
        }

        return $model;
    }
}
