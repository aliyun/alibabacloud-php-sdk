<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstancesResponseBody\renderingInstances;
use AlibabaCloud\Tea\Model;

class ListRenderingInstancesResponseBody extends Model
{
    /**
     * @var renderingInstances[]
     */
    public $renderingInstances;

    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'renderingInstances' => 'RenderingInstances',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->renderingInstances) {
            $res['RenderingInstances'] = [];
            if (null !== $this->renderingInstances && \is_array($this->renderingInstances)) {
                $n = 0;
                foreach ($this->renderingInstances as $item) {
                    $res['RenderingInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRenderingInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenderingInstances'])) {
            if (!empty($map['RenderingInstances'])) {
                $model->renderingInstances = [];
                $n                         = 0;
                foreach ($map['RenderingInstances'] as $item) {
                    $model->renderingInstances[$n++] = null !== $item ? renderingInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
