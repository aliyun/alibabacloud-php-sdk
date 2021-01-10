<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList\imageSearchJob;
use AlibabaCloud\Tea\Model;

class imageSearchJobList extends Model
{
    /**
     * @var imageSearchJob[]
     */
    public $imageSearchJob;
    protected $_name = [
        'imageSearchJob' => 'ImageSearchJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageSearchJob) {
            $res['ImageSearchJob'] = [];
            if (null !== $this->imageSearchJob && \is_array($this->imageSearchJob)) {
                $n = 0;
                foreach ($this->imageSearchJob as $item) {
                    $res['ImageSearchJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageSearchJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageSearchJob'])) {
            if (!empty($map['ImageSearchJob'])) {
                $model->imageSearchJob = [];
                $n                     = 0;
                foreach ($map['ImageSearchJob'] as $item) {
                    $model->imageSearchJob[$n++] = null !== $item ? imageSearchJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
