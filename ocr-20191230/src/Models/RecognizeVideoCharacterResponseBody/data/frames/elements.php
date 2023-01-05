<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCharacterResponseBody\data\frames;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCharacterResponseBody\data\frames\elements\textRectangles;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @example 0.99
     *
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $text;

    /**
     * @var textRectangles[]
     */
    public $textRectangles;
    protected $_name = [
        'score'          => 'Score',
        'text'           => 'Text',
        'textRectangles' => 'TextRectangles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->textRectangles) {
            $res['TextRectangles'] = [];
            if (null !== $this->textRectangles && \is_array($this->textRectangles)) {
                $n = 0;
                foreach ($this->textRectangles as $item) {
                    $res['TextRectangles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['TextRectangles'])) {
            if (!empty($map['TextRectangles'])) {
                $model->textRectangles = [];
                $n                     = 0;
                foreach ($map['TextRectangles'] as $item) {
                    $model->textRectangles[$n++] = null !== $item ? textRectangles::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
