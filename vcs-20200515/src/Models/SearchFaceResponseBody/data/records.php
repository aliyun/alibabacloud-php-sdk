<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\SearchFaceResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $targetImageUrl;

    /**
     * @var float
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var float
     */
    public $leftTopY;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var float
     */
    public $rightBottomX;

    /**
     * @var float
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $matchSuggestion;
    protected $_name = [
        'gbId'            => 'GbId',
        'targetImageUrl'  => 'TargetImageUrl',
        'rightBottomY'    => 'RightBottomY',
        'imageUrl'        => 'ImageUrl',
        'leftTopY'        => 'LeftTopY',
        'score'           => 'Score',
        'sourceId'        => 'SourceId',
        'rightBottomX'    => 'RightBottomX',
        'leftTopX'        => 'LeftTopX',
        'matchSuggestion' => 'MatchSuggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->targetImageUrl) {
            $res['TargetImageUrl'] = $this->targetImageUrl;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->matchSuggestion) {
            $res['MatchSuggestion'] = $this->matchSuggestion;
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
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['TargetImageUrl'])) {
            $model->targetImageUrl = $map['TargetImageUrl'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['MatchSuggestion'])) {
            $model->matchSuggestion = $map['MatchSuggestion'];
        }

        return $model;
    }
}
