<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QueryFigureClustersResponseBody extends Model
{
    /**
     * @var FigureCluster[]
     */
    public $figureClusters;

    /**
     * @example 10
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example CA995EFD-083D-4F40-BE8A-BDF75FFF****
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
        'figureClusters' => 'FigureClusters',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->figureClusters) {
            $res['FigureClusters'] = [];
            if (null !== $this->figureClusters && \is_array($this->figureClusters)) {
                $n = 0;
                foreach ($this->figureClusters as $item) {
                    $res['FigureClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return QueryFigureClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FigureClusters'])) {
            if (!empty($map['FigureClusters'])) {
                $model->figureClusters = [];
                $n                     = 0;
                foreach ($map['FigureClusters'] as $item) {
                    $model->figureClusters[$n++] = null !== $item ? FigureCluster::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
