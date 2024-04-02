<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate\videoConfig\ad;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate\videoConfig\live;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate\videoConfig\porn;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate\videoConfig\terrorism;
use AlibabaCloud\Tea\Model;

class videoConfig extends Model
{
    /**
     * @var ad
     */
    public $ad;

    /**
     * @var live
     */
    public $live;

    /**
     * @var porn
     */
    public $porn;

    /**
     * @var terrorism
     */
    public $terrorism;
    protected $_name = [
        'ad'        => 'Ad',
        'live'      => 'Live',
        'porn'      => 'Porn',
        'terrorism' => 'Terrorism',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ad) {
            $res['Ad'] = null !== $this->ad ? $this->ad->toMap() : null;
        }
        if (null !== $this->live) {
            $res['Live'] = null !== $this->live ? $this->live->toMap() : null;
        }
        if (null !== $this->porn) {
            $res['Porn'] = null !== $this->porn ? $this->porn->toMap() : null;
        }
        if (null !== $this->terrorism) {
            $res['Terrorism'] = null !== $this->terrorism ? $this->terrorism->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ad'])) {
            $model->ad = ad::fromMap($map['Ad']);
        }
        if (isset($map['Live'])) {
            $model->live = live::fromMap($map['Live']);
        }
        if (isset($map['Porn'])) {
            $model->porn = porn::fromMap($map['Porn']);
        }
        if (isset($map['Terrorism'])) {
            $model->terrorism = terrorism::fromMap($map['Terrorism']);
        }

        return $model;
    }
}
