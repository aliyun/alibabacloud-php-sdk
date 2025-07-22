<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody\data\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody\data\data\item\insItems;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var int[]
     */
    public $count;

    /**
     * @var insItems[]
     */
    public $insItems;

    /**
     * @example r-bp1hi0wg57s3n0i3n8-db-0
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'count' => 'Count',
        'insItems' => 'InsItems',
        'nodeId' => 'NodeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->insItems) {
            $res['InsItems'] = [];
            if (null !== $this->insItems && \is_array($this->insItems)) {
                $n = 0;
                foreach ($this->insItems as $item) {
                    $res['InsItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            if (!empty($map['Count'])) {
                $model->count = $map['Count'];
            }
        }
        if (isset($map['InsItems'])) {
            if (!empty($map['InsItems'])) {
                $model->insItems = [];
                $n = 0;
                foreach ($map['InsItems'] as $item) {
                    $model->insItems[$n++] = null !== $item ? insItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
