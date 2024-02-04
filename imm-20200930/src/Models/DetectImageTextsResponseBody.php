<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

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
     * @example 1B3D5E0A-D8B8-4DA0-8127-ED32C851****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'OCRContents' => 'OCRContents',
        'OCRTexts'    => 'OCRTexts',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OCRContents) {
            $res['OCRContents'] = [];
            if (null !== $this->OCRContents && \is_array($this->OCRContents)) {
                $n = 0;
                foreach ($this->OCRContents as $item) {
                    $res['OCRContents'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DetectImageTextsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OCRContents'])) {
            if (!empty($map['OCRContents'])) {
                $model->OCRContents = [];
                $n                  = 0;
                foreach ($map['OCRContents'] as $item) {
                    $model->OCRContents[$n++] = null !== $item ? OCRContents::fromMap($item) : $item;
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
