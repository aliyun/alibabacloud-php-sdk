<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEssayCorrectionResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEssayCorrectionResponseBody\payload\output\dimensionResults;

class output extends Model
{
    /**
     * @var dimensionResults[]
     */
    public $dimensionResults;

    /**
     * @var string
     */
    public $overallComment;

    /**
     * @var string
     */
    public $reasoningContent;

    /**
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'dimensionResults' => 'dimensionResults',
        'overallComment' => 'overallComment',
        'reasoningContent' => 'reasoningContent',
        'score' => 'score',
        'text' => 'text',
    ];

    public function validate()
    {
        if (\is_array($this->dimensionResults)) {
            Model::validateArray($this->dimensionResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimensionResults) {
            if (\is_array($this->dimensionResults)) {
                $res['dimensionResults'] = [];
                $n1 = 0;
                foreach ($this->dimensionResults as $item1) {
                    $res['dimensionResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->overallComment) {
            $res['overallComment'] = $this->overallComment;
        }

        if (null !== $this->reasoningContent) {
            $res['reasoningContent'] = $this->reasoningContent;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['dimensionResults'])) {
            if (!empty($map['dimensionResults'])) {
                $model->dimensionResults = [];
                $n1 = 0;
                foreach ($map['dimensionResults'] as $item1) {
                    $model->dimensionResults[$n1] = dimensionResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['overallComment'])) {
            $model->overallComment = $map['overallComment'];
        }

        if (isset($map['reasoningContent'])) {
            $model->reasoningContent = $map['reasoningContent'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
