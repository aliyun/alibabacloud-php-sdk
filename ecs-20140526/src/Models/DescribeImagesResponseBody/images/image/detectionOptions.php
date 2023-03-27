<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\detectionOptions\items;
use AlibabaCloud\Tea\Model;

class detectionOptions extends Model
{
    /**
     * @description The check items.
     *
     * @var items
     */
    public $items;

    /**
     * @description The state of the image check task. Valid values:
     *
     *   Processing: The image check task is in progress.
     *   Finished: The image check task is completed.
     *
     * @example Processing
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'items'  => 'Items',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectionOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
