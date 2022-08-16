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
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'figureClusters' => 'FigureClusters',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
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

        return $model;
    }
}
