<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult\terrorismImages\terrorismImage;
use AlibabaCloud\Tea\Model;

class terrorismImages extends Model
{
    /**
     * @var terrorismImage[]
     */
    public $terrorismImage;
    protected $_name = [
        'terrorismImage' => 'TerrorismImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terrorismImage) {
            $res['TerrorismImage'] = [];
            if (null !== $this->terrorismImage && \is_array($this->terrorismImage)) {
                $n = 0;
                foreach ($this->terrorismImage as $item) {
                    $res['TerrorismImage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorismImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TerrorismImage'])) {
            if (!empty($map['TerrorismImage'])) {
                $model->terrorismImage = [];
                $n                     = 0;
                foreach ($map['TerrorismImage'] as $item) {
                    $model->terrorismImage[$n++] = null !== $item ? terrorismImage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
