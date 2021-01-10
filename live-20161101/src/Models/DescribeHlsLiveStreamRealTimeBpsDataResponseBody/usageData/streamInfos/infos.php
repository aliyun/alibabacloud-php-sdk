<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponseBody\usageData\streamInfos;

use AlibabaCloud\Tea\Model;

class infos extends Model
{
    /**
     * @var float
     */
    public $downFlow;

    /**
     * @var float
     */
    public $online;

    /**
     * @var string
     */
    public $rate;
    protected $_name = [
        'downFlow' => 'DownFlow',
        'online'   => 'Online',
        'rate'     => 'Rate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downFlow) {
            $res['DownFlow'] = $this->downFlow;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return infos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownFlow'])) {
            $model->downFlow = $map['DownFlow'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        return $model;
    }
}
