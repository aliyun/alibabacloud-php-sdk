<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponseBody;

use AlibabaCloud\Tea\Model;

class liveStreamHlsDelayConfig extends Model
{
    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $delay;
    protected $_name = [
        'level' => 'Level',
        'delay' => 'Delay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamHlsDelayConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        return $model;
    }
}
