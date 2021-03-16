<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList\imageSearchJob\result;

use AlibabaCloud\Tea\Model;

class imageSearchShots extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList\imageSearchJob\result\imageSearchShots\imageSearchShots[]
     */
    public $imageSearchShots;
    protected $_name = [
        'imageSearchShots' => 'ImageSearchShots',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageSearchShots) {
            $res['ImageSearchShots'] = [];
            if (null !== $this->imageSearchShots && \is_array($this->imageSearchShots)) {
                $n = 0;
                foreach ($this->imageSearchShots as $item) {
                    $res['ImageSearchShots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageSearchShots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageSearchShots'])) {
            if (!empty($map['ImageSearchShots'])) {
                $model->imageSearchShots = [];
                $n                       = 0;
                foreach ($map['ImageSearchShots'] as $item) {
                    $model->imageSearchShots[$n++] = null !== $item ? \AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList\imageSearchJob\result\imageSearchShots\imageSearchShots::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
