<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageTraceResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageTraceResponseBody\data\messageTrack;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var messageTrack[]
     */
    public $messageTrack;
    protected $_name = [
        'messageTrack' => 'MessageTrack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageTrack) {
            $res['MessageTrack'] = [];
            if (null !== $this->messageTrack && \is_array($this->messageTrack)) {
                $n = 0;
                foreach ($this->messageTrack as $item) {
                    $res['MessageTrack'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageTrack'])) {
            if (!empty($map['MessageTrack'])) {
                $model->messageTrack = [];
                $n                   = 0;
                foreach ($map['MessageTrack'] as $item) {
                    $model->messageTrack[$n++] = null !== $item ? messageTrack::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
