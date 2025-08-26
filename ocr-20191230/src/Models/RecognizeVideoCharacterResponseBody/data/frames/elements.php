<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCharacterResponseBody\data\frames;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCharacterResponseBody\data\frames\elements\textRectangles;

class elements extends Model
{
    /**
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
        'score' => 'Score',
        'text' => 'Text',
        'textRectangles' => 'TextRectangles',
    ];

    public function validate()
    {
        if (\is_array($this->textRectangles)) {
            Model::validateArray($this->textRectangles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->textRectangles) {
            if (\is_array($this->textRectangles)) {
                $res['TextRectangles'] = [];
                $n1 = 0;
                foreach ($this->textRectangles as $item1) {
                    $res['TextRectangles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['TextRectangles'])) {
            if (!empty($map['TextRectangles'])) {
                $model->textRectangles = [];
                $n1 = 0;
                foreach ($map['TextRectangles'] as $item1) {
                    $model->textRectangles[$n1] = textRectangles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
