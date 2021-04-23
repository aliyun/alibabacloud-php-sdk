<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDelayConfigResponseBody;

use AlibabaCloud\Tea\Model;

class liveStreamHlsDelayConfig extends Model
{
    /**
     * @var int
     */
    public $delay;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'delay' => 'Delay',
        'level' => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
