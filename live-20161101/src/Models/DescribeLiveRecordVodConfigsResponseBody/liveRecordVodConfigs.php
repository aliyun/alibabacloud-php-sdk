<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponseBody\liveRecordVodConfigs\liveRecordVodConfig;
use AlibabaCloud\Tea\Model;

class liveRecordVodConfigs extends Model
{
    /**
     * @var liveRecordVodConfig[]
     */
    public $liveRecordVodConfig;
    protected $_name = [
        'liveRecordVodConfig' => 'LiveRecordVodConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveRecordVodConfig) {
            $res['LiveRecordVodConfig'] = [];
            if (null !== $this->liveRecordVodConfig && \is_array($this->liveRecordVodConfig)) {
                $n = 0;
                foreach ($this->liveRecordVodConfig as $item) {
                    $res['LiveRecordVodConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveRecordVodConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveRecordVodConfig'])) {
            if (!empty($map['LiveRecordVodConfig'])) {
                $model->liveRecordVodConfig = [];
                $n                          = 0;
                foreach ($map['LiveRecordVodConfig'] as $item) {
                    $model->liveRecordVodConfig[$n++] = null !== $item ? liveRecordVodConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
