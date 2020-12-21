<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonTraceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $endTargetImage;

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
    public $groupId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $endSourceImage;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $startSourceImage;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $startTargetImage;
    protected $_name = [
        'endTargetImage'   => 'EndTargetImage',
        'lastTime'         => 'LastTime',
        'startTime'        => 'StartTime',
        'groupId'          => 'GroupId',
        'deviceId'         => 'DeviceId',
        'endSourceImage'   => 'EndSourceImage',
        'corpId'           => 'CorpId',
        'startSourceImage' => 'StartSourceImage',
        'date'             => 'Date',
        'personId'         => 'PersonId',
        'startTargetImage' => 'StartTargetImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTargetImage) {
            $res['EndTargetImage'] = $this->endTargetImage;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->endSourceImage) {
            $res['EndSourceImage'] = $this->endSourceImage;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->startSourceImage) {
            $res['StartSourceImage'] = $this->startSourceImage;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->startTargetImage) {
            $res['StartTargetImage'] = $this->startTargetImage;
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
        if (isset($map['EndTargetImage'])) {
            $model->endTargetImage = $map['EndTargetImage'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['EndSourceImage'])) {
            $model->endSourceImage = $map['EndSourceImage'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['StartSourceImage'])) {
            $model->startSourceImage = $map['StartSourceImage'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['StartTargetImage'])) {
            $model->startTargetImage = $map['StartTargetImage'];
        }

        return $model;
    }
}
