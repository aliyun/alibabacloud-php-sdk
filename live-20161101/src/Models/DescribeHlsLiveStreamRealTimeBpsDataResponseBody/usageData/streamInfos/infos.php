<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponseBody\usageData\streamInfos;

use AlibabaCloud\Dara\Model;

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
        'online' => 'Online',
        'rate' => 'Rate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
