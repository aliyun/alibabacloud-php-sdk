<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOptimizedFeatureConfigResponseBody\liveStreamOptimizedFeatureConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamOptimizedFeatureConfigResponseBody extends Model
{
    /**
     * @var liveStreamOptimizedFeatureConfigList
     */
    public $liveStreamOptimizedFeatureConfigList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveStreamOptimizedFeatureConfigList' => 'LiveStreamOptimizedFeatureConfigList',
        'requestId'                            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamOptimizedFeatureConfigList) {
            $res['LiveStreamOptimizedFeatureConfigList'] = null !== $this->liveStreamOptimizedFeatureConfigList ? $this->liveStreamOptimizedFeatureConfigList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamOptimizedFeatureConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamOptimizedFeatureConfigList'])) {
            $model->liveStreamOptimizedFeatureConfigList = liveStreamOptimizedFeatureConfigList::fromMap($map['LiveStreamOptimizedFeatureConfigList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
