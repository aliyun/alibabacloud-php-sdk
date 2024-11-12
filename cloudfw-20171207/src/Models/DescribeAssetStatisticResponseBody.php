<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticResponseBody\resourceSpecStatistic;
use AlibabaCloud\Tea\Model;

class DescribeAssetStatisticResponseBody extends Model
{
    /**
     * @example 850A84******25g4d2
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceSpecStatistic
     */
    public $resourceSpecStatistic;
    protected $_name = [
        'requestId'             => 'RequestId',
        'resourceSpecStatistic' => 'ResourceSpecStatistic',
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
        if (null !== $this->resourceSpecStatistic) {
            $res['ResourceSpecStatistic'] = null !== $this->resourceSpecStatistic ? $this->resourceSpecStatistic->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetStatisticResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceSpecStatistic'])) {
            $model->resourceSpecStatistic = resourceSpecStatistic::fromMap($map['ResourceSpecStatistic']);
        }

        return $model;
    }
}
