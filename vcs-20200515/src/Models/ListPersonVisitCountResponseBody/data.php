<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonVisitCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dayId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $corpId;

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
    public $personId;
    protected $_name = [
        'dayId'      => 'DayId',
        'groupId'    => 'GroupId',
        'deviceId'   => 'DeviceId',
        'tagCode'    => 'TagCode',
        'corpId'     => 'CorpId',
        'tagMetrics' => 'TagMetrics',
        'hourId'     => 'HourId',
        'personId'   => 'PersonId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayId) {
            $res['DayId'] = $this->dayId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->tagMetrics) {
            $res['TagMetrics'] = $this->tagMetrics;
        }
        if (null !== $this->hourId) {
            $res['HourId'] = $this->hourId;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
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
        if (isset($map['DayId'])) {
            $model->dayId = $map['DayId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['TagMetrics'])) {
            $model->tagMetrics = $map['TagMetrics'];
        }
        if (isset($map['HourId'])) {
            $model->hourId = $map['HourId'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}
