<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesResponseBody\zones\zone\resourceTags\resourceTag;
use AlibabaCloud\Tea\Model;

class resourceTags extends Model
{
    /**
     * @var resourceTag[]
     */
    public $resourceTag;
    protected $_name = [
        'resourceTag' => 'ResourceTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceTag) {
            $res['ResourceTag'] = [];
            if (null !== $this->resourceTag && \is_array($this->resourceTag)) {
                $n = 0;
                foreach ($this->resourceTag as $item) {
                    $res['ResourceTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceTag'])) {
            if (!empty($map['ResourceTag'])) {
                $model->resourceTag = [];
                $n                  = 0;
                foreach ($map['ResourceTag'] as $item) {
                    $model->resourceTag[$n++] = null !== $item ? resourceTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
