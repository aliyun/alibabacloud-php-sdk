<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelinesResponseBody\pipelines;
use AlibabaCloud\Tea\Model;

class ListPipelinesResponseBody extends Model
{
    /**
     * @var pipelines[]
     */
    public $pipelines;

    /**
     * @example DA869D1B-035A-43B2-ACC1-C56681B****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pipelines'  => 'Pipelines',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelines) {
            $res['Pipelines'] = [];
            if (null !== $this->pipelines && \is_array($this->pipelines)) {
                $n = 0;
                foreach ($this->pipelines as $item) {
                    $res['Pipelines'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPipelinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pipelines'])) {
            if (!empty($map['Pipelines'])) {
                $model->pipelines = [];
                $n                = 0;
                foreach ($map['Pipelines'] as $item) {
                    $model->pipelines[$n++] = null !== $item ? pipelines::fromMap($item) : $item;
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
