<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\MediaQualityAnalysisJobVqaResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaQualityAnalysisJobVqaResult\scoreResult\block;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaQualityAnalysisJobVqaResult\scoreResult\color;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaQualityAnalysisJobVqaResult\scoreResult\detail;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaQualityAnalysisJobVqaResult\scoreResult\noise;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaQualityAnalysisJobVqaResult\scoreResult\sharp;

class scoreResult extends Model
{
    /**
     * @var block
     */
    public $block;

    /**
     * @var color
     */
    public $color;

    /**
     * @var detail
     */
    public $detail;

    /**
     * @var noise
     */
    public $noise;

    /**
     * @var float
     */
    public $score;

    /**
     * @var sharp
     */
    public $sharp;
    protected $_name = [
        'block' => 'Block',
        'color' => 'Color',
        'detail' => 'Detail',
        'noise' => 'Noise',
        'score' => 'Score',
        'sharp' => 'Sharp',
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

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->sharp) {
            $res['Sharp'] = null !== $this->sharp ? $this->sharp->toArray($noStream) : $this->sharp;
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
            $model->block = block::fromMap($map['Block']);
        }

        if (isset($map['Color'])) {
            $model->color = color::fromMap($map['Color']);
        }

        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        if (isset($map['Noise'])) {
            $model->noise = noise::fromMap($map['Noise']);
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Sharp'])) {
            $model->sharp = sharp::fromMap($map['Sharp']);
        }

        return $model;
    }
}
