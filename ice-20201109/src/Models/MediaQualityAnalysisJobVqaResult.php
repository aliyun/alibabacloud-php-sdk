<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaQualityAnalysisJobVqaResult\scoreResult;

class MediaQualityAnalysisJobVqaResult extends Model
{
    /**
     * @var MediaQualityAnalysisJobVqaScoreDetail
     */
    public $block;

    /**
     * @var MediaQualityAnalysisJobVqaScoreDetail
     */
    public $color;

    /**
     * @var MediaQualityAnalysisJobVqaScoreDetail
     */
    public $detail;

    /**
     * @var MediaQualityAnalysisJobVqaScoreDetail
     */
    public $noise;

    /**
     * @var scoreResult
     */
    public $scoreResult;

    /**
     * @var MediaQualityAnalysisJobVqaScoreDetail
     */
    public $sharp;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'block' => 'Block',
        'color' => 'Color',
        'detail' => 'Detail',
        'noise' => 'Noise',
        'scoreResult' => 'ScoreResult',
        'sharp' => 'Sharp',
        'state' => 'State',
    ];

    public function validate()
    {
        if (null !== $this->block) {
            $this->block->validate();
        }
        if (null !== $this->color) {
            $this->color->validate();
        }
        if (null !== $this->detail) {
            $this->detail->validate();
        }
        if (null !== $this->noise) {
            $this->noise->validate();
        }
        if (null !== $this->scoreResult) {
            $this->scoreResult->validate();
        }
        if (null !== $this->sharp) {
            $this->sharp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->block) {
            $res['Block'] = null !== $this->block ? $this->block->toArray($noStream) : $this->block;
        }

        if (null !== $this->color) {
            $res['Color'] = null !== $this->color ? $this->color->toArray($noStream) : $this->color;
        }

        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toArray($noStream) : $this->detail;
        }

        if (null !== $this->noise) {
            $res['Noise'] = null !== $this->noise ? $this->noise->toArray($noStream) : $this->noise;
        }

        if (null !== $this->scoreResult) {
            $res['ScoreResult'] = null !== $this->scoreResult ? $this->scoreResult->toArray($noStream) : $this->scoreResult;
        }

        if (null !== $this->sharp) {
            $res['Sharp'] = null !== $this->sharp ? $this->sharp->toArray($noStream) : $this->sharp;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Block'])) {
            $model->block = MediaQualityAnalysisJobVqaScoreDetail::fromMap($map['Block']);
        }

        if (isset($map['Color'])) {
            $model->color = MediaQualityAnalysisJobVqaScoreDetail::fromMap($map['Color']);
        }

        if (isset($map['Detail'])) {
            $model->detail = MediaQualityAnalysisJobVqaScoreDetail::fromMap($map['Detail']);
        }

        if (isset($map['Noise'])) {
            $model->noise = MediaQualityAnalysisJobVqaScoreDetail::fromMap($map['Noise']);
        }

        if (isset($map['ScoreResult'])) {
            $model->scoreResult = scoreResult::fromMap($map['ScoreResult']);
        }

        if (isset($map['Sharp'])) {
            $model->sharp = MediaQualityAnalysisJobVqaScoreDetail::fromMap($map['Sharp']);
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
