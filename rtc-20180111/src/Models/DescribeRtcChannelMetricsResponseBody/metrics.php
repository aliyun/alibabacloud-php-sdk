<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var string
     */
    public $mid;

    /**
     * @var string[]
     */
    public $KVs;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'mid' => 'Mid',
        'KVs' => 'KVs',
        'uid' => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }
        if (null !== $this->KVs) {
            $res['KVs'] = $this->KVs;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }
        if (isset($map['KVs'])) {
            if (!empty($map['KVs'])) {
                $model->KVs = $map['KVs'];
            }
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
