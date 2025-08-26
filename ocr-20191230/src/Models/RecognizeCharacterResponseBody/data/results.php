<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterResponseBody\data\results\textRectangles;

class results extends Model
{
    /**
     * @var float
     */
    public $probability;

    /**
     * @var string
     */
    public $text;

    /**
     * @var textRectangles
     */
    public $textRectangles;
    protected $_name = [
        'probability' => 'Probability',
        'text' => 'Text',
        'textRectangles' => 'TextRectangles',
    ];

    public function validate()
    {
        if (null !== $this->textRectangles) {
            $this->textRectangles->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->probability) {
            $res['Probability'] = $this->probability;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->textRectangles) {
            $res['TextRectangles'] = null !== $this->textRectangles ? $this->textRectangles->toArray($noStream) : $this->textRectangles;
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
        if (isset($map['Probability'])) {
            $model->probability = $map['Probability'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['TextRectangles'])) {
            $model->textRectangles = textRectangles::fromMap($map['TextRectangles']);
        }

        return $model;
    }
}
