<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\coverJobList\coverJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponseBody\coverJobList\coverJob\coverImageList\coverImage;
use AlibabaCloud\Tea\Model;

class coverImageList extends Model
{
    /**
     * @var coverImage[]
     */
    public $coverImage;
    protected $_name = [
        'coverImage' => 'CoverImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverImage) {
            $res['CoverImage'] = [];
            if (null !== $this->coverImage && \is_array($this->coverImage)) {
                $n = 0;
                foreach ($this->coverImage as $item) {
                    $res['CoverImage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coverImageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverImage'])) {
            if (!empty($map['CoverImage'])) {
                $model->coverImage = [];
                $n                 = 0;
                foreach ($map['CoverImage'] as $item) {
                    $model->coverImage[$n++] = null !== $item ? coverImage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
