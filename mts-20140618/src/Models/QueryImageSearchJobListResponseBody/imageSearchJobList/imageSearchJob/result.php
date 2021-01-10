<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList\imageSearchJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList\imageSearchJob\result\imageSearchShots;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var imageSearchShots
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
            $res['ImageSearchShots'] = null !== $this->imageSearchShots ? $this->imageSearchShots->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageSearchShots'])) {
            $model->imageSearchShots = imageSearchShots::fromMap($map['ImageSearchShots']);
        }

        return $model;
    }
}
