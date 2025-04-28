<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;

class DescribeDiagnosisSQLInfoRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $processRcHost;

    /**
     * @var int
     */
    public $processStartTime;

    /**
     * @var string
     */
    public $processState;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'lang' => 'Lang',
        'processId' => 'ProcessId',
        'processRcHost' => 'ProcessRcHost',
        'processStartTime' => 'ProcessStartTime',
        'processState' => 'ProcessState',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->processRcHost) {
            $res['ProcessRcHost'] = $this->processRcHost;
        }

        if (null !== $this->processStartTime) {
            $res['ProcessStartTime'] = $this->processStartTime;
        }

        if (null !== $this->processState) {
            $res['ProcessState'] = $this->processState;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        if (isset($map['ProcessRcHost'])) {
            $model->processRcHost = $map['ProcessRcHost'];
        }

        if (isset($map['ProcessStartTime'])) {
            $model->processStartTime = $map['ProcessStartTime'];
        }

        if (isset($map['ProcessState'])) {
            $model->processState = $map['ProcessState'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
