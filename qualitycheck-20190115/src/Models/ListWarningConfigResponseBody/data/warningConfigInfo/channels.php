<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo\channels\channel;
use AlibabaCloud\Tea\Model;

class channels extends Model
{
    /**
     * @var channel[]
     */
    public $channel;
    protected $_name = [
        'channel' => 'Channel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = [];
            if (null !== $this->channel && \is_array($this->channel)) {
                $n = 0;
                foreach ($this->channel as $item) {
                    $res['Channel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            if (!empty($map['Channel'])) {
                $model->channel = [];
                $n              = 0;
                foreach ($map['Channel'] as $item) {
                    $model->channel[$n++] = null !== $item ? channel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
