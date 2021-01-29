<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterResponseBody\data\results\textRectangles;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var textRectangles
     */
    public $textRectangles;

    /**
     * @var string
     */
    public $text;

    /**
     * @var float
     */
    public $probability;
    protected $_name = [
        'textRectangles' => 'TextRectangles',
        'text'           => 'Text',
        'probability'    => 'Probability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->textRectangles) {
            $res['TextRectangles'] = null !== $this->textRectangles ? $this->textRectangles->toMap() : null;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->probability) {
            $res['Probability'] = $this->probability;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TextRectangles'])) {
            $model->textRectangles = textRectangles::fromMap($map['TextRectangles']);
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Probability'])) {
            $model->probability = $map['Probability'];
        }

        return $model;
    }
}
