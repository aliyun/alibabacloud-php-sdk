<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonTraceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $lastTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endSourceImage;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $startTargetImage;

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
    public $startSourceImage;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $endTargetImage;
    protected $_name = [
        'date'             => 'Date',
        'lastTime'         => 'LastTime',
        'startTime'        => 'StartTime',
        'endSourceImage'   => 'EndSourceImage',
        'deviceId'         => 'DeviceId',
        'startTargetImage' => 'StartTargetImage',
        'groupId'          => 'GroupId',
        'personId'         => 'PersonId',
        'startSourceImage' => 'StartSourceImage',
        'corpId'           => 'CorpId',
        'endTargetImage'   => 'EndTargetImage',
    ];

    public function validate()
    {
        Model::validateRequired('date', $this->date, true);
        Model::validateRequired('lastTime', $this->lastTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endSourceImage', $this->endSourceImage, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('startTargetImage', $this->startTargetImage, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('personId', $this->personId, true);
        Model::validateRequired('startSourceImage', $this->startSourceImage, true);
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('endTargetImage', $this->endTargetImage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endSourceImage) {
            $res['EndSourceImage'] = $this->endSourceImage;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->startTargetImage) {
            $res['StartTargetImage'] = $this->startTargetImage;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->startSourceImage) {
            $res['StartSourceImage'] = $this->startSourceImage;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->endTargetImage) {
            $res['EndTargetImage'] = $this->endTargetImage;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndSourceImage'])) {
            $model->endSourceImage = $map['EndSourceImage'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['StartTargetImage'])) {
            $model->startTargetImage = $map['StartTargetImage'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['StartSourceImage'])) {
            $model->startSourceImage = $map['StartSourceImage'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['EndTargetImage'])) {
            $model->endTargetImage = $map['EndTargetImage'];
        }

        return $model;
    }
}
