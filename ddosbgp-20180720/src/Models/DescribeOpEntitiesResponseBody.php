<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOpEntitiesResponseBody\opEntities;
use AlibabaCloud\Tea\Model;

class DescribeOpEntitiesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @var opEntities[]
     */
    public $opEntities;

    /**
     * @description The end time. Operation logs that were generated before this time are queried.**** This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 52C8ECB0-0B1A-4E66-A31C-B6A855120E82
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the log was generated. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'opEntities' => 'OpEntities',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opEntities) {
            $res['OpEntities'] = [];
            if (null !== $this->opEntities && \is_array($this->opEntities)) {
                $n = 0;
                foreach ($this->opEntities as $item) {
                    $res['OpEntities'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeOpEntitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpEntities'])) {
            if (!empty($map['OpEntities'])) {
                $model->opEntities = [];
                $n                 = 0;
                foreach ($map['OpEntities'] as $item) {
                    $model->opEntities[$n++] = null !== $item ? opEntities::fromMap($item) : $item;
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
