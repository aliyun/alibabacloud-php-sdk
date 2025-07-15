<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody\subtitleConfigs\subtitleConfig;
use AlibabaCloud\Tea\Model;

class subtitleConfigs extends Model
{
    /**
     * @var subtitleConfig[]
     */
    public $subtitleConfig;
    protected $_name = [
        'subtitleConfig' => 'SubtitleConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->subtitleConfig) {
            $res['SubtitleConfig'] = [];
            if (null !== $this->subtitleConfig && \is_array($this->subtitleConfig)) {
                $n = 0;
                foreach ($this->subtitleConfig as $item) {
                    $res['SubtitleConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitleConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubtitleConfig'])) {
            if (!empty($map['SubtitleConfig'])) {
                $model->subtitleConfig = [];
                $n = 0;
                foreach ($map['SubtitleConfig'] as $item) {
                    $model->subtitleConfig[$n++] = null !== $item ? subtitleConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
