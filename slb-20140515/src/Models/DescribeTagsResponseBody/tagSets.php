<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeTagsResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeTagsResponseBody\tagSets\tagSet;
use AlibabaCloud\Tea\Model;

class tagSets extends Model
{
    /**
     * @var tagSet[]
     */
    public $tagSet;
    protected $_name = [
        'tagSet' => 'TagSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagSet) {
            $res['TagSet'] = [];
            if (null !== $this->tagSet && \is_array($this->tagSet)) {
                $n = 0;
                foreach ($this->tagSet as $item) {
                    $res['TagSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagSet'])) {
            if (!empty($map['TagSet'])) {
                $model->tagSet = [];
                $n             = 0;
                foreach ($map['TagSet'] as $item) {
                    $model->tagSet[$n++] = null !== $item ? tagSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
