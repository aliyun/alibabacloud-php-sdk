<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultResponseBody\data;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultResponseBody\data\records\extendInfo;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var string
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $monitorPicUrl;

    /**
     * @var string
     */
    public $rightBottomX;

    /**
     * @var extendInfo
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $leftUpY;

    /**
     * @var string
     */
    public $leftUpX;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $targetPicUrl;
    protected $_name = [
        'picUrl'        => 'PicUrl',
        'rightBottomY'  => 'RightBottomY',
        'score'         => 'Score',
        'monitorPicUrl' => 'MonitorPicUrl',
        'rightBottomX'  => 'RightBottomX',
        'extendInfo'    => 'ExtendInfo',
        'gbId'          => 'GbId',
        'leftUpY'       => 'LeftUpY',
        'leftUpX'       => 'LeftUpX',
        'shotTime'      => 'ShotTime',
        'taskId'        => 'TaskId',
        'targetPicUrl'  => 'TargetPicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->monitorPicUrl) {
            $res['MonitorPicUrl'] = $this->monitorPicUrl;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = null !== $this->extendInfo ? $this->extendInfo->toMap() : null;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->leftUpY) {
            $res['LeftUpY'] = $this->leftUpY;
        }
        if (null !== $this->leftUpX) {
            $res['LeftUpX'] = $this->leftUpX;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->targetPicUrl) {
            $res['TargetPicUrl'] = $this->targetPicUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['MonitorPicUrl'])) {
            $model->monitorPicUrl = $map['MonitorPicUrl'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = extendInfo::fromMap($map['ExtendInfo']);
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['LeftUpY'])) {
            $model->leftUpY = $map['LeftUpY'];
        }
        if (isset($map['LeftUpX'])) {
            $model->leftUpX = $map['LeftUpX'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TargetPicUrl'])) {
            $model->targetPicUrl = $map['TargetPicUrl'];
        }

        return $model;
    }
}
