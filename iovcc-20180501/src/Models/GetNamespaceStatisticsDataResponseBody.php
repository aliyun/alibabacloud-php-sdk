<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetNamespaceStatisticsDataResponseBody\statistics;
use AlibabaCloud\Tea\Model;

class GetNamespaceStatisticsDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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
     * @return GetNamespaceStatisticsDataResponseBody
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
