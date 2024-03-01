<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsResponseBody\statistics;
use AlibabaCloud\Tea\Model;

class DescribeDomainStatisticsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 6AEC7A64-3CB1-4C49-8B35-0B901F1E26BF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The statistics on the Domain Name System (DNS) requests.
     *
     * @var statistics
     */
    public $statistics;
    protected $_name = [
        'requestId'  => 'RequestId',
        'statistics' => 'Statistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = null !== $this->statistics ? $this->statistics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = statistics::fromMap($map['Statistics']);
        }

        return $model;
    }
}
