<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohAccountStatisticsResponseBody\statistics;
use AlibabaCloud\Tea\Model;

class DescribeDohAccountStatisticsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0F32959D-417B-4D66-8463-68606605E3E2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The statistics list.
     *
     * @var statistics[]
     */
    public $statistics;
    protected $_name = [
        'requestId' => 'RequestId',
        'statistics' => 'Statistics',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = [];
            if (null !== $this->statistics && \is_array($this->statistics)) {
                $n = 0;
                foreach ($this->statistics as $item) {
                    $res['Statistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDohAccountStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Statistics'])) {
            if (!empty($map['Statistics'])) {
                $model->statistics = [];
                $n = 0;
                foreach ($map['Statistics'] as $item) {
                    $model->statistics[$n++] = null !== $item ? statistics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
