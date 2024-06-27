<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\chart;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\content;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\resourceInfo;
use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description The baseline behavior chart of the anomalous event.
     *
     * @var chart[]
     */
    public $chart;

    /**
     * @description The content in the anomalous event.
     *
     * @var content[]
     */
    public $content;

    /**
     * @description An array that consists of the source from which the information of the anomalous event is recorded.
     *
     * @var resourceInfo[]
     */
    public $resourceInfo;
    protected $_name = [
        'chart'        => 'Chart',
        'content'      => 'Content',
        'resourceInfo' => 'ResourceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chart) {
            $res['Chart'] = [];
            if (null !== $this->chart && \is_array($this->chart)) {
                $n = 0;
                foreach ($this->chart as $item) {
                    $res['Chart'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->content) {
            $res['Content'] = [];
            if (null !== $this->content && \is_array($this->content)) {
                $n = 0;
                foreach ($this->content as $item) {
                    $res['Content'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceInfo) {
            $res['ResourceInfo'] = [];
            if (null !== $this->resourceInfo && \is_array($this->resourceInfo)) {
                $n = 0;
                foreach ($this->resourceInfo as $item) {
                    $res['ResourceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Chart'])) {
            if (!empty($map['Chart'])) {
                $model->chart = [];
                $n            = 0;
                foreach ($map['Chart'] as $item) {
                    $model->chart[$n++] = null !== $item ? chart::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n              = 0;
                foreach ($map['Content'] as $item) {
                    $model->content[$n++] = null !== $item ? content::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceInfo'])) {
            if (!empty($map['ResourceInfo'])) {
                $model->resourceInfo = [];
                $n                   = 0;
                foreach ($map['ResourceInfo'] as $item) {
                    $model->resourceInfo[$n++] = null !== $item ? resourceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
