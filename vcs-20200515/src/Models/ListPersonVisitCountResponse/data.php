<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonVisitCountResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $tagMetrics;

    /**
     * @var string
     */
    public $hourId;

    /**
     * @var string
     */
    public $dayId;
    protected $_name = [
        'corpId'     => 'CorpId',
        'deviceId'   => 'DeviceId',
        'groupId'    => 'GroupId',
        'personId'   => 'PersonId',
        'tagCode'    => 'TagCode',
        'tagMetrics' => 'TagMetrics',
        'hourId'     => 'HourId',
        'dayId'      => 'DayId',
    ];

    public function validate()
    {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('personId', $this->personId, true);
        Model::validateRequired('tagCode', $this->tagCode, true);
        Model::validateRequired('tagMetrics', $this->tagMetrics, true);
        Model::validateRequired('hourId', $this->hourId, true);
        Model::validateRequired('dayId', $this->dayId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->tagMetrics) {
            $res['TagMetrics'] = $this->tagMetrics;
        }
        if (null !== $this->hourId) {
            $res['HourId'] = $this->hourId;
        }
        if (null !== $this->dayId) {
            $res['DayId'] = $this->dayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['TagMetrics'])) {
            $model->tagMetrics = $map['TagMetrics'];
        }
        if (isset($map['HourId'])) {
            $model->hourId = $map['HourId'];
        }
        if (isset($map['DayId'])) {
            $model->dayId = $map['DayId'];
        }

        return $model;
    }
}
