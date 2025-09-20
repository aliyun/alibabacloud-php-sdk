<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DetectImageTextsResponseBody extends Model
{
    /**
     * @var OCRContents[]
     */
    public $OCRContents;

    /**
     * @var string
     */
    public $OCRTexts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'OCRContents' => 'OCRContents',
        'OCRTexts' => 'OCRTexts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->OCRContents)) {
            Model::validateArray($this->OCRContents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->OCRContents) {
            if (\is_array($this->OCRContents)) {
                $res['OCRContents'] = [];
                $n1 = 0;
                foreach ($this->OCRContents as $item1) {
                    $res['OCRContents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->OCRTexts) {
            $res['OCRTexts'] = $this->OCRTexts;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OCRContents'])) {
            if (!empty($map['OCRContents'])) {
                $model->OCRContents = [];
                $n1 = 0;
                foreach ($map['OCRContents'] as $item1) {
                    $model->OCRContents[$n1] = OCRContents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OCRTexts'])) {
            $model->OCRTexts = $map['OCRTexts'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
