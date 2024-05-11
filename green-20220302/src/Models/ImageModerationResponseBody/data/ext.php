<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\ocrResult;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\recognition;
use AlibabaCloud\Tea\Model;

class ext extends Model
{
    /**
     * @var ocrResult[]
     */
    public $ocrResult;

    /**
     * @var recognition[]
     */
    public $recognition;
    protected $_name = [
        'ocrResult'   => 'OcrResult',
        'recognition' => 'Recognition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ocrResult) {
            $res['OcrResult'] = [];
            if (null !== $this->ocrResult && \is_array($this->ocrResult)) {
                $n = 0;
                foreach ($this->ocrResult as $item) {
                    $res['OcrResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->recognition) {
            $res['Recognition'] = [];
            if (null !== $this->recognition && \is_array($this->recognition)) {
                $n = 0;
                foreach ($this->recognition as $item) {
                    $res['Recognition'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OcrResult'])) {
            if (!empty($map['OcrResult'])) {
                $model->ocrResult = [];
                $n                = 0;
                foreach ($map['OcrResult'] as $item) {
                    $model->ocrResult[$n++] = null !== $item ? ocrResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Recognition'])) {
            if (!empty($map['Recognition'])) {
                $model->recognition = [];
                $n                  = 0;
                foreach ($map['Recognition'] as $item) {
                    $model->recognition[$n++] = null !== $item ? recognition::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
