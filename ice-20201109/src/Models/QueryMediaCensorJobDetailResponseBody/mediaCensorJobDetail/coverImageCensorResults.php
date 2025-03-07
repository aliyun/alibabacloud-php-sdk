<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\coverImageCensorResults\coverImageCensorResult;
use AlibabaCloud\Tea\Model;

class coverImageCensorResults extends Model
{
    /**
     * @var coverImageCensorResult[]
     */
    public $coverImageCensorResult;
    protected $_name = [
        'coverImageCensorResult' => 'CoverImageCensorResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverImageCensorResult) {
            $res['CoverImageCensorResult'] = [];
            if (null !== $this->coverImageCensorResult && \is_array($this->coverImageCensorResult)) {
                $n = 0;
                foreach ($this->coverImageCensorResult as $item) {
                    $res['CoverImageCensorResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coverImageCensorResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverImageCensorResult'])) {
            if (!empty($map['CoverImageCensorResult'])) {
                $model->coverImageCensorResult = [];
                $n                             = 0;
                foreach ($map['CoverImageCensorResult'] as $item) {
                    $model->coverImageCensorResult[$n++] = null !== $item ? coverImageCensorResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
