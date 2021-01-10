<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\fpCompareResult\mediaMatchSegments;

use AlibabaCloud\Tea\Model;

class mediaMatchSegment extends Model
{
    /**
     * @var string
     */
    public $queryStartTime;

    /**
     * @var string
     */
    public $queryEndFrame;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $totalMatchFrameNum;

    /**
     * @var string
     */
    public $masterEndTime;

    /**
     * @var string
     */
    public $masterStartTime;

    /**
     * @var string
     */
    public $queryStartFrame;

    /**
     * @var string
     */
    public $masterEndFrame;

    /**
     * @var string
     */
    public $masterStartFrame;

    /**
     * @var string
     */
    public $queryEndTime;
    protected $_name = [
        'queryStartTime'     => 'QueryStartTime',
        'queryEndFrame'      => 'QueryEndFrame',
        'score'              => 'Score',
        'totalMatchFrameNum' => 'TotalMatchFrameNum',
        'masterEndTime'      => 'MasterEndTime',
        'masterStartTime'    => 'MasterStartTime',
        'queryStartFrame'    => 'QueryStartFrame',
        'masterEndFrame'     => 'MasterEndFrame',
        'masterStartFrame'   => 'MasterStartFrame',
        'queryEndTime'       => 'QueryEndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }
        if (null !== $this->queryEndFrame) {
            $res['QueryEndFrame'] = $this->queryEndFrame;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->totalMatchFrameNum) {
            $res['TotalMatchFrameNum'] = $this->totalMatchFrameNum;
        }
        if (null !== $this->masterEndTime) {
            $res['MasterEndTime'] = $this->masterEndTime;
        }
        if (null !== $this->masterStartTime) {
            $res['MasterStartTime'] = $this->masterStartTime;
        }
        if (null !== $this->queryStartFrame) {
            $res['QueryStartFrame'] = $this->queryStartFrame;
        }
        if (null !== $this->masterEndFrame) {
            $res['MasterEndFrame'] = $this->masterEndFrame;
        }
        if (null !== $this->masterStartFrame) {
            $res['MasterStartFrame'] = $this->masterStartFrame;
        }
        if (null !== $this->queryEndTime) {
            $res['QueryEndTime'] = $this->queryEndTime;
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
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }
        if (isset($map['QueryEndFrame'])) {
            $model->queryEndFrame = $map['QueryEndFrame'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['TotalMatchFrameNum'])) {
            $model->totalMatchFrameNum = $map['TotalMatchFrameNum'];
        }
        if (isset($map['MasterEndTime'])) {
            $model->masterEndTime = $map['MasterEndTime'];
        }
        if (isset($map['MasterStartTime'])) {
            $model->masterStartTime = $map['MasterStartTime'];
        }
        if (isset($map['QueryStartFrame'])) {
            $model->queryStartFrame = $map['QueryStartFrame'];
        }
        if (isset($map['MasterEndFrame'])) {
            $model->masterEndFrame = $map['MasterEndFrame'];
        }
        if (isset($map['MasterStartFrame'])) {
            $model->masterStartFrame = $map['MasterStartFrame'];
        }
        if (isset($map['QueryEndTime'])) {
            $model->queryEndTime = $map['QueryEndTime'];
        }

        return $model;
    }
}
