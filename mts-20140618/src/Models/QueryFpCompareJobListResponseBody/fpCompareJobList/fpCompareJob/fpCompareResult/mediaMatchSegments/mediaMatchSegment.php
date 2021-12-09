<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\fpCompareResult\mediaMatchSegments;

use AlibabaCloud\Tea\Model;

class mediaMatchSegment extends Model
{
    /**
     * @var string
     */
    public $masterEndFrame;

    /**
     * @var string
     */
    public $masterEndTime;

    /**
     * @var string
     */
    public $masterStartFrame;

    /**
     * @var string
     */
    public $masterStartTime;

    /**
     * @var string
     */
    public $queryEndFrame;

    /**
     * @var string
     */
    public $queryEndTime;

    /**
     * @var string
     */
    public $queryStartFrame;

    /**
     * @var string
     */
    public $queryStartTime;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $totalMatchFrameNum;
    protected $_name = [
        'masterEndFrame'     => 'MasterEndFrame',
        'masterEndTime'      => 'MasterEndTime',
        'masterStartFrame'   => 'MasterStartFrame',
        'masterStartTime'    => 'MasterStartTime',
        'queryEndFrame'      => 'QueryEndFrame',
        'queryEndTime'       => 'QueryEndTime',
        'queryStartFrame'    => 'QueryStartFrame',
        'queryStartTime'     => 'QueryStartTime',
        'score'              => 'Score',
        'totalMatchFrameNum' => 'TotalMatchFrameNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterEndFrame) {
            $res['MasterEndFrame'] = $this->masterEndFrame;
        }
        if (null !== $this->masterEndTime) {
            $res['MasterEndTime'] = $this->masterEndTime;
        }
        if (null !== $this->masterStartFrame) {
            $res['MasterStartFrame'] = $this->masterStartFrame;
        }
        if (null !== $this->masterStartTime) {
            $res['MasterStartTime'] = $this->masterStartTime;
        }
        if (null !== $this->queryEndFrame) {
            $res['QueryEndFrame'] = $this->queryEndFrame;
        }
        if (null !== $this->queryEndTime) {
            $res['QueryEndTime'] = $this->queryEndTime;
        }
        if (null !== $this->queryStartFrame) {
            $res['QueryStartFrame'] = $this->queryStartFrame;
        }
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->totalMatchFrameNum) {
            $res['TotalMatchFrameNum'] = $this->totalMatchFrameNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaMatchSegment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterEndFrame'])) {
            $model->masterEndFrame = $map['MasterEndFrame'];
        }
        if (isset($map['MasterEndTime'])) {
            $model->masterEndTime = $map['MasterEndTime'];
        }
        if (isset($map['MasterStartFrame'])) {
            $model->masterStartFrame = $map['MasterStartFrame'];
        }
        if (isset($map['MasterStartTime'])) {
            $model->masterStartTime = $map['MasterStartTime'];
        }
        if (isset($map['QueryEndFrame'])) {
            $model->queryEndFrame = $map['QueryEndFrame'];
        }
        if (isset($map['QueryEndTime'])) {
            $model->queryEndTime = $map['QueryEndTime'];
        }
        if (isset($map['QueryStartFrame'])) {
            $model->queryStartFrame = $map['QueryStartFrame'];
        }
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['TotalMatchFrameNum'])) {
            $model->totalMatchFrameNum = $map['TotalMatchFrameNum'];
        }

        return $model;
    }
}
