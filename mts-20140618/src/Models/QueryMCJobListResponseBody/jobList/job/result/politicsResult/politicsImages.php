<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult\politicsImages\politicsImage;
use AlibabaCloud\Tea\Model;

class politicsImages extends Model
{
    /**
     * @var politicsImage[]
     */
    public $politicsImage;
    protected $_name = [
        'politicsImage' => 'PoliticsImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->politicsImage) {
            $res['PoliticsImage'] = [];
            if (null !== $this->politicsImage && \is_array($this->politicsImage)) {
                $n = 0;
                foreach ($this->politicsImage as $item) {
                    $res['PoliticsImage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return politicsImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoliticsImage'])) {
            if (!empty($map['PoliticsImage'])) {
                $model->politicsImage = [];
                $n                    = 0;
                foreach ($map['PoliticsImage'] as $item) {
                    $model->politicsImage[$n++] = null !== $item ? politicsImage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
