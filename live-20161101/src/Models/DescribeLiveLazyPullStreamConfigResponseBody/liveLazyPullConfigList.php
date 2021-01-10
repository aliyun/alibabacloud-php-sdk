<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigResponseBody\liveLazyPullConfigList\liveLazyPullConfig;
use AlibabaCloud\Tea\Model;

class liveLazyPullConfigList extends Model
{
    /**
     * @var liveLazyPullConfig[]
     */
    public $liveLazyPullConfig;
    protected $_name = [
        'liveLazyPullConfig' => 'LiveLazyPullConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveLazyPullConfig) {
            $res['LiveLazyPullConfig'] = [];
            if (null !== $this->liveLazyPullConfig && \is_array($this->liveLazyPullConfig)) {
                $n = 0;
                foreach ($this->liveLazyPullConfig as $item) {
                    $res['LiveLazyPullConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveLazyPullConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveLazyPullConfig'])) {
            if (!empty($map['LiveLazyPullConfig'])) {
                $model->liveLazyPullConfig = [];
                $n                         = 0;
                foreach ($map['LiveLazyPullConfig'] as $item) {
                    $model->liveLazyPullConfig[$n++] = null !== $item ? liveLazyPullConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
