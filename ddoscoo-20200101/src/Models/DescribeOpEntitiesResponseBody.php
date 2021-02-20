<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeOpEntitiesResponseBody\opEntities;
use AlibabaCloud\Tea\Model;

class DescribeOpEntitiesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var opEntities[]
     */
    public $opEntities;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'opEntities' => 'OpEntities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->opEntities) {
            $res['OpEntities'] = [];
            if (null !== $this->opEntities && \is_array($this->opEntities)) {
                $n = 0;
                foreach ($this->opEntities as $item) {
                    $res['OpEntities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOpEntitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OpEntities'])) {
            if (!empty($map['OpEntities'])) {
                $model->opEntities = [];
                $n                 = 0;
                foreach ($map['OpEntities'] as $item) {
                    $model->opEntities[$n++] = null !== $item ? opEntities::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
