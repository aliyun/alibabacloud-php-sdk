<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponseBody\dataCaches;
use AlibabaCloud\Tea\Model;

class DescribeDataCachesResponseBody extends Model
{
    /**
     * @description The information about the data caches.
     *
     * @var dataCaches[]
     */
    public $dataCaches;

    /**
     * @description The query token. Set the value to the NextToken value that is returned in the previous call.
     *
     * @example d78f2dd8-5979-42fe-xaee-b16db43be5bc
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example B8756BA0-6452-419C-9727-37A6209C85E0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataCaches' => 'DataCaches',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCaches) {
            $res['DataCaches'] = [];
            if (null !== $this->dataCaches && \is_array($this->dataCaches)) {
                $n = 0;
                foreach ($this->dataCaches as $item) {
                    $res['DataCaches'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDataCachesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCaches'])) {
            if (!empty($map['DataCaches'])) {
                $model->dataCaches = [];
                $n                 = 0;
                foreach ($map['DataCaches'] as $item) {
                    $model->dataCaches[$n++] = null !== $item ? dataCaches::fromMap($item) : $item;
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
