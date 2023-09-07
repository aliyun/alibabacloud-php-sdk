<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\newStyleData;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\newStyleData\docInfo\pages;
use AlibabaCloud\Tea\Model;

class docInfo extends Model
{
    /**
     * @var pages[]
     */
    public $pages;
    protected $_name = [
        'pages' => 'Pages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pages) {
            $res['Pages'] = [];
            if (null !== $this->pages && \is_array($this->pages)) {
                $n = 0;
                foreach ($this->pages as $item) {
                    $res['Pages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return docInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pages'])) {
            if (!empty($map['Pages'])) {
                $model->pages = [];
                $n            = 0;
                foreach ($map['Pages'] as $item) {
                    $model->pages[$n++] = null !== $item ? pages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
