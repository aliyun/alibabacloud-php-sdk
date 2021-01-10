<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\ocrResult\ocr;
use AlibabaCloud\Tea\Model;

class ocrResult extends Model
{
    /**
     * @var ocr[]
     */
    public $ocr;
    protected $_name = [
        'ocr' => 'Ocr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ocr) {
            $res['Ocr'] = [];
            if (null !== $this->ocr && \is_array($this->ocr)) {
                $n = 0;
                foreach ($this->ocr as $item) {
                    $res['Ocr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ocrResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ocr'])) {
            if (!empty($map['Ocr'])) {
                $model->ocr = [];
                $n          = 0;
                foreach ($map['Ocr'] as $item) {
                    $model->ocr[$n++] = null !== $item ? ocr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
