<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList\channelList;

use AlibabaCloud\Dara\Model;

class callArea extends Model
{
    /**
     * @var string[]
     */
    public $callArea;
    protected $_name = [
        'callArea' => 'CallArea',
    ];

    public function validate()
    {
        if (\is_array($this->callArea)) {
            Model::validateArray($this->callArea);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callArea) {
            if (\is_array($this->callArea)) {
                $res['CallArea'] = [];
                $n1              = 0;
                foreach ($this->callArea as $item1) {
                    $res['CallArea'][$n1++] = $item1;
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
        if (isset($map['CallArea'])) {
            if (!empty($map['CallArea'])) {
                $model->callArea = [];
                $n1              = 0;
                foreach ($map['CallArea'] as $item1) {
                    $model->callArea[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
