<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisSQLInfoRequest extends Model
{
    /**
     * @example amv-bp1r053byu48p
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 2021070216432217201616806503453
     *
     * @var string
     */
    public $processId;

    /**
     * @example 192.45.***.***:3145
     *
     * @var string
     */
    public $processRcHost;

    /**
     * @example 1625215402000
     *
     * @var int
     */
    public $processStartTime;

    /**
     * @example running
     *
     * @var string
     */
    public $processState;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId'      => 'DBClusterId',
        'lang'             => 'Lang',
        'processId'        => 'ProcessId',
        'processRcHost'    => 'ProcessRcHost',
        'processStartTime' => 'ProcessStartTime',
        'processState'     => 'ProcessState',
        'regionId'         => 'RegionId',
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
