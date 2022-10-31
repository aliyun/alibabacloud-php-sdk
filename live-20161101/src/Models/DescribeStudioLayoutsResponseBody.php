<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts;
use AlibabaCloud\Tea\Model;

class DescribeStudioLayoutsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var studioLayouts[]
     */
    public $studioLayouts;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId'     => 'RequestId',
        'studioLayouts' => 'StudioLayouts',
        'total'         => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->studioLayouts) {
            $res['StudioLayouts'] = [];
            if (null !== $this->studioLayouts && \is_array($this->studioLayouts)) {
                $n = 0;
                foreach ($this->studioLayouts as $item) {
                    $res['StudioLayouts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStudioLayoutsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StudioLayouts'])) {
            if (!empty($map['StudioLayouts'])) {
                $model->studioLayouts = [];
                $n                    = 0;
                foreach ($map['StudioLayouts'] as $item) {
                    $model->studioLayouts[$n++] = null !== $item ? studioLayouts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
