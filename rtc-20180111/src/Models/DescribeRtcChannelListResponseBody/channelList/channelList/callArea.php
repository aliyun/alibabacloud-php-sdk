<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList\channelList;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callArea) {
            $res['CallArea'] = $this->callArea;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callArea
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallArea'])) {
            if (!empty($map['CallArea'])) {
                $model->callArea = $map['CallArea'];
            }
        }

        return $model;
    }
}
