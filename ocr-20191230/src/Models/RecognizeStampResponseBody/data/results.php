<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampResponseBody\data\results\generalText;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampResponseBody\data\results\roi;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampResponseBody\data\results\text;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var text
     */
    public $text;

    /**
     * @var roi
     */
    public $roi;

    /**
     * @var generalText[]
     */
    public $generalText;
    protected $_name = [
        'text'        => 'Text',
        'roi'         => 'Roi',
        'generalText' => 'GeneralText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = null !== $this->text ? $this->text->toMap() : null;
        }
        if (null !== $this->roi) {
            $res['Roi'] = null !== $this->roi ? $this->roi->toMap() : null;
        }
        if (null !== $this->generalText) {
            $res['GeneralText'] = [];
            if (null !== $this->generalText && \is_array($this->generalText)) {
                $n = 0;
                foreach ($this->generalText as $item) {
                    $res['GeneralText'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Text'])) {
            $model->text = text::fromMap($map['Text']);
        }
        if (isset($map['Roi'])) {
            $model->roi = roi::fromMap($map['Roi']);
        }
        if (isset($map['GeneralText'])) {
            if (!empty($map['GeneralText'])) {
                $model->generalText = [];
                $n                  = 0;
                foreach ($map['GeneralText'] as $item) {
                    $model->generalText[$n++] = null !== $item ? generalText::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
