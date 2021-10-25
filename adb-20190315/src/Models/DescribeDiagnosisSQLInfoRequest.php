<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisSQLInfoRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $processId;

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
    public $lang;

    /**
     * @var string
     */
    public $processRcHost;
    protected $_name = [
        'DBClusterId'      => 'DBClusterId',
        'regionId'         => 'RegionId',
        'processId'        => 'ProcessId',
        'processStartTime' => 'ProcessStartTime',
        'processState'     => 'ProcessState',
        'lang'             => 'Lang',
        'processRcHost'    => 'ProcessRcHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->processStartTime) {
            $res['ProcessStartTime'] = $this->processStartTime;
        }
        if (null !== $this->processState) {
            $res['ProcessState'] = $this->processState;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->processRcHost) {
            $res['ProcessRcHost'] = $this->processRcHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisSQLInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['ProcessStartTime'])) {
            $model->processStartTime = $map['ProcessStartTime'];
        }
        if (isset($map['ProcessState'])) {
            $model->processState = $map['ProcessState'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ProcessRcHost'])) {
            $model->processRcHost = $map['ProcessRcHost'];
        }

        return $model;
    }
}
