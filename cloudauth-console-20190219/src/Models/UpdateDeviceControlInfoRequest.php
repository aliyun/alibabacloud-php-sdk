<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeviceControlInfoRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $iotId;

    /**
     * @var int
     */
    public $multiPerson;

    /**
     * @var int
     */
    public $controlDoorTime;

    /**
     * @var int
     */
    public $enableMeasureTempurature;

    /**
     * @var int
     */
    public $speedClock;
    protected $_name = [
        'sourceIp'                 => 'SourceIp',
        'projectId'                => 'ProjectId',
        'iotId'                    => 'IotId',
        'multiPerson'              => 'MultiPerson',
        'controlDoorTime'          => 'ControlDoorTime',
        'enableMeasureTempurature' => 'EnableMeasureTempurature',
        'speedClock'               => 'SpeedClock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->multiPerson) {
            $res['MultiPerson'] = $this->multiPerson;
        }
        if (null !== $this->controlDoorTime) {
            $res['ControlDoorTime'] = $this->controlDoorTime;
        }
        if (null !== $this->enableMeasureTempurature) {
            $res['EnableMeasureTempurature'] = $this->enableMeasureTempurature;
        }
        if (null !== $this->speedClock) {
            $res['SpeedClock'] = $this->speedClock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeviceControlInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['MultiPerson'])) {
            $model->multiPerson = $map['MultiPerson'];
        }
        if (isset($map['ControlDoorTime'])) {
            $model->controlDoorTime = $map['ControlDoorTime'];
        }
        if (isset($map['EnableMeasureTempurature'])) {
            $model->enableMeasureTempurature = $map['EnableMeasureTempurature'];
        }
        if (isset($map['SpeedClock'])) {
            $model->speedClock = $map['SpeedClock'];
        }

        return $model;
    }
}
