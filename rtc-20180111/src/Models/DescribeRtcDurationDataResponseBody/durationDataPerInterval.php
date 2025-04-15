<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataResponseBody\durationDataPerInterval\durationModule;

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
        if (\is_array($this->durationModule)) {
            Model::validateArray($this->durationModule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->durationModule) {
            if (\is_array($this->durationModule)) {
                $res['DurationModule'] = [];
                $n1 = 0;
                foreach ($this->durationModule as $item1) {
                    $res['DurationModule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DurationModule'])) {
            if (!empty($map['DurationModule'])) {
                $model->durationModule = [];
                $n1 = 0;
                foreach ($map['DurationModule'] as $item1) {
                    $model->durationModule[$n1++] = durationModule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
