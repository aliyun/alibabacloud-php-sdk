<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOptimizedFeatureConfigResponse\liveStreamOptimizedFeatureConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamOptimizedFeatureConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveStreamOptimizedFeatureConfigList
     */
    public $liveStreamOptimizedFeatureConfigList;
    protected $_name = [
        'requestId'                            => 'RequestId',
        'liveStreamOptimizedFeatureConfigList' => 'LiveStreamOptimizedFeatureConfigList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('liveStreamOptimizedFeatureConfigList', $this->liveStreamOptimizedFeatureConfigList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->liveStreamOptimizedFeatureConfigList) {
            $res['LiveStreamOptimizedFeatureConfigList'] = null !== $this->liveStreamOptimizedFeatureConfigList ? $this->liveStreamOptimizedFeatureConfigList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamOptimizedFeatureConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveStreamOptimizedFeatureConfigList'])) {
            $model->liveStreamOptimizedFeatureConfigList = liveStreamOptimizedFeatureConfigList::fromMap($map['LiveStreamOptimizedFeatureConfigList']);
        }

        return $model;
    }
}
