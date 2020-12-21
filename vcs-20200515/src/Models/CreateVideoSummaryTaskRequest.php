<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoSummaryTaskRequest extends Model
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
     * @var int
     */
    public $startTimeStamp;

    /**
     * @var int
     */
    public $endTimeStamp;

    /**
     * @var string
     */
    public $optionList;

    /**
     * @var string
     */
    public $liveVideoSummary;
    protected $_name = [
        'corpId'           => 'CorpId',
        'deviceId'         => 'DeviceId',
        'startTimeStamp'   => 'StartTimeStamp',
        'endTimeStamp'     => 'EndTimeStamp',
        'optionList'       => 'OptionList',
        'liveVideoSummary' => 'LiveVideoSummary',
    ];

    public function validate()
    {
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
        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
        }
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }
        if (null !== $this->optionList) {
            $res['OptionList'] = $this->optionList;
        }
        if (null !== $this->liveVideoSummary) {
            $res['LiveVideoSummary'] = $this->liveVideoSummary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoSummaryTaskRequest
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
        if (isset($map['StartTimeStamp'])) {
            $model->startTimeStamp = $map['StartTimeStamp'];
        }
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if (isset($map['OptionList'])) {
            $model->optionList = $map['OptionList'];
        }
        if (isset($map['LiveVideoSummary'])) {
            $model->liveVideoSummary = $map['LiveVideoSummary'];
        }

        return $model;
    }
}
