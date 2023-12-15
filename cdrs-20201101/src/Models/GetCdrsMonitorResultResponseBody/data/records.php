<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\GetCdrsMonitorResultResponseBody\data;

use AlibabaCloud\SDK\CDRS\V20201101\Models\GetCdrsMonitorResultResponseBody\data\records\extendInfo;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var extendInfo
     */
    public $extendInfo;

    /**
     * @example 3301101201132799****
     *
     * @var string
     */
    public $gbId;

    /**
     * @example 100
     *
     * @var string
     */
    public $leftUpX;

    /**
     * @example 100
     *
     * @var string
     */
    public $leftUpY;

    /**
     * @example http://xxx/xxx.jpg
     *
     * @var string
     */
    public $monitorPicUrl;

    /**
     * @example http://xxx/xxx.jpg
     *
     * @var string
     */
    public $picUrl;

    /**
     * @example 800
     *
     * @var string
     */
    public $rightBottomX;

    /**
     * @example 800
     *
     * @var string
     */
    public $rightBottomY;

    /**
     * @example 0.8
     *
     * @var string
     */
    public $score;

    /**
     * @example 1590411602000
     *
     * @var string
     */
    public $shotTime;

    /**
     * @example http://xxx/xxx.jpg
     *
     * @var string
     */
    public $targetPicUrl;

    /**
     * @example 313f1f30600482e9fc1ef3e738c1a3
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'extendInfo'    => 'ExtendInfo',
        'gbId'          => 'GbId',
        'leftUpX'       => 'LeftUpX',
        'leftUpY'       => 'LeftUpY',
        'monitorPicUrl' => 'MonitorPicUrl',
        'picUrl'        => 'PicUrl',
        'rightBottomX'  => 'RightBottomX',
        'rightBottomY'  => 'RightBottomY',
        'score'         => 'Score',
        'shotTime'      => 'ShotTime',
        'targetPicUrl'  => 'TargetPicUrl',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = null !== $this->extendInfo ? $this->extendInfo->toMap() : null;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->leftUpX) {
            $res['LeftUpX'] = $this->leftUpX;
        }
        if (null !== $this->leftUpY) {
            $res['LeftUpY'] = $this->leftUpY;
        }
        if (null !== $this->monitorPicUrl) {
            $res['MonitorPicUrl'] = $this->monitorPicUrl;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->targetPicUrl) {
            $res['TargetPicUrl'] = $this->targetPicUrl;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = extendInfo::fromMap($map['ExtendInfo']);
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['LeftUpX'])) {
            $model->leftUpX = $map['LeftUpX'];
        }
        if (isset($map['LeftUpY'])) {
            $model->leftUpY = $map['LeftUpY'];
        }
        if (isset($map['MonitorPicUrl'])) {
            $model->monitorPicUrl = $map['MonitorPicUrl'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['TargetPicUrl'])) {
            $model->targetPicUrl = $map['TargetPicUrl'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
