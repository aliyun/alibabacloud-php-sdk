<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOptimizedFeatureConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOptimizedFeatureConfigResponseBody\liveStreamOptimizedFeatureConfigList\liveStreamOptimizedFeatureConfig;
use AlibabaCloud\Tea\Model;

class liveStreamOptimizedFeatureConfigList extends Model
{
    /**
     * @var liveStreamOptimizedFeatureConfig[]
     */
    public $liveStreamOptimizedFeatureConfig;
    protected $_name = [
        'liveStreamOptimizedFeatureConfig' => 'LiveStreamOptimizedFeatureConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamOptimizedFeatureConfig) {
            $res['LiveStreamOptimizedFeatureConfig'] = [];
            if (null !== $this->liveStreamOptimizedFeatureConfig && \is_array($this->liveStreamOptimizedFeatureConfig)) {
                $n = 0;
                foreach ($this->liveStreamOptimizedFeatureConfig as $item) {
                    $res['LiveStreamOptimizedFeatureConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamOptimizedFeatureConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamOptimizedFeatureConfig'])) {
            if (!empty($map['LiveStreamOptimizedFeatureConfig'])) {
                $model->liveStreamOptimizedFeatureConfig = [];
                $n                                       = 0;
                foreach ($map['LiveStreamOptimizedFeatureConfig'] as $item) {
                    $model->liveStreamOptimizedFeatureConfig[$n++] = null !== $item ? liveStreamOptimizedFeatureConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
