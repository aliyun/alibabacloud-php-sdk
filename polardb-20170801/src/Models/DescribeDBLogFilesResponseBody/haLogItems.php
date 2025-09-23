<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLogFilesResponseBody;

use AlibabaCloud\Dara\Model;

class haLogItems extends Model
{
    /**
     * @var int
     */
    public $affectedSessions;

    /**
     * @var string
     */
    public $fromDBType;

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
     * @var int
     */
    public $switchType;

    /**
     * @var int
     */
    public $totalSessions;
    protected $_name = [
        'affectedSessions' => 'AffectedSessions',
        'fromDBType' => 'FromDBType',
        'switchCauseCode' => 'SwitchCauseCode',
        'switchCauseDetail' => 'SwitchCauseDetail',
        'switchFinishTime' => 'SwitchFinishTime',
        'switchId' => 'SwitchId',
        'switchStartTime' => 'SwitchStartTime',
        'switchType' => 'SwitchType',
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

        if (null !== $this->fromDBType) {
            $res['FromDBType'] = $this->fromDBType;
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

        if (null !== $this->switchType) {
            $res['SwitchType'] = $this->switchType;
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

        if (isset($map['FromDBType'])) {
            $model->fromDBType = $map['FromDBType'];
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

        if (isset($map['SwitchType'])) {
            $model->switchType = $map['SwitchType'];
        }

        if (isset($map['TotalSessions'])) {
            $model->totalSessions = $map['TotalSessions'];
        }

        return $model;
    }
}
