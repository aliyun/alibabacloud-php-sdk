<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataResponseBody\durationDataPerInterval\durationModule;
use AlibabaCloud\Tea\Model;

class durationDataPerInterval extends Model
{
    /**
     * @var durationModule[]
     */
    public $durationModule;
    protected $_name = [
        'durationModule' => 'DurationModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->durationModule) {
            $res['DurationModule'] = [];
            if (null !== $this->durationModule && \is_array($this->durationModule)) {
                $n = 0;
                foreach ($this->durationModule as $item) {
                    $res['DurationModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return durationDataPerInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DurationModule'])) {
            if (!empty($map['DurationModule'])) {
                $model->durationModule = [];
                $n                     = 0;
                foreach ($map['DurationModule'] as $item) {
                    $model->durationModule[$n++] = null !== $item ? durationModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
