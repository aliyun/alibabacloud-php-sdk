<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponse\usageData\streamInfos;

use AlibabaCloud\Tea\Model;

class infos extends Model
{
    /**
     * @var float
     */
    public $downFlow;

    /**
     * @var string
     */
    public $rate;

    /**
     * @var float
     */
    public $online;
    protected $_name = [
        'downFlow' => 'DownFlow',
        'rate'     => 'Rate',
        'online'   => 'Online',
    ];

    public function validate()
    {
        Model::validateRequired('downFlow', $this->downFlow, true);
        Model::validateRequired('rate', $this->rate, true);
        Model::validateRequired('online', $this->online, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downFlow) {
            $res['DownFlow'] = $this->downFlow;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
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
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        return $model;
    }
}
