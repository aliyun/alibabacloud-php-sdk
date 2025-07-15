<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveDelayConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveDelayConfigResponseBody\delayConfigList\delayConfig;
use AlibabaCloud\Tea\Model;

class delayConfigList extends Model
{
    /**
     * @var delayConfig[]
     */
    public $delayConfig;
    protected $_name = [
        'delayConfig' => 'DelayConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->delayConfig) {
            $res['DelayConfig'] = [];
            if (null !== $this->delayConfig && \is_array($this->delayConfig)) {
                $n = 0;
                foreach ($this->delayConfig as $item) {
                    $res['DelayConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return delayConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelayConfig'])) {
            if (!empty($map['DelayConfig'])) {
                $model->delayConfig = [];
                $n = 0;
                foreach ($map['DelayConfig'] as $item) {
                    $model->delayConfig[$n++] = null !== $item ? delayConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
