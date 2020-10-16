<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultResponse\data;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultResponse\data\records\extendInfo;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $rightBottomX;

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
    public $gbId;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $monitorPicUrl;

    /**
     * @var string
     */
    public $targetPicUrl;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var extendInfo
     */
    public $extendInfo;
    protected $_name = [
        'rightBottomY'  => 'RightBottomY',
        'rightBottomX'  => 'RightBottomX',
        'leftUpY'       => 'LeftUpY',
        'leftUpX'       => 'LeftUpX',
        'gbId'          => 'GbId',
        'score'         => 'Score',
        'picUrl'        => 'PicUrl',
        'shotTime'      => 'ShotTime',
        'monitorPicUrl' => 'MonitorPicUrl',
        'targetPicUrl'  => 'TargetPicUrl',
        'taskId'        => 'TaskId',
        'extendInfo'    => 'ExtendInfo',
    ];

    public function validate()
    {
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('leftUpY', $this->leftUpY, true);
        Model::validateRequired('leftUpX', $this->leftUpX, true);
        Model::validateRequired('gbId', $this->gbId, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('picUrl', $this->picUrl, true);
        Model::validateRequired('shotTime', $this->shotTime, true);
        Model::validateRequired('monitorPicUrl', $this->monitorPicUrl, true);
        Model::validateRequired('targetPicUrl', $this->targetPicUrl, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('extendInfo', $this->extendInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->leftUpY) {
            $res['LeftUpY'] = $this->leftUpY;
        }
        if (null !== $this->leftUpX) {
            $res['LeftUpX'] = $this->leftUpX;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->monitorPicUrl) {
            $res['MonitorPicUrl'] = $this->monitorPicUrl;
        }
        if (null !== $this->targetPicUrl) {
            $res['TargetPicUrl'] = $this->targetPicUrl;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = null !== $this->extendInfo ? $this->extendInfo->toMap() : null;
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
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['LeftUpY'])) {
            $model->leftUpY = $map['LeftUpY'];
        }
        if (isset($map['LeftUpX'])) {
            $model->leftUpX = $map['LeftUpX'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['MonitorPicUrl'])) {
            $model->monitorPicUrl = $map['MonitorPicUrl'];
        }
        if (isset($map['TargetPicUrl'])) {
            $model->targetPicUrl = $map['TargetPicUrl'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = extendInfo::fromMap($map['ExtendInfo']);
        }

        return $model;
    }
}
