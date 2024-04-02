<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody;

use AlibabaCloud\Tea\Model;

class imageAutoFreeze extends Model
{
    /**
     * @var string
     */
    public $ad;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $live;

    /**
     * @var string
     */
    public $porn;

    /**
     * @var string
     */
    public $terrorism;
    protected $_name = [
        'ad'        => 'Ad',
        'enabled'   => 'Enabled',
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
            $res['Ad'] = $this->ad;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->live) {
            $res['Live'] = $this->live;
        }
        if (null !== $this->porn) {
            $res['Porn'] = $this->porn;
        }
        if (null !== $this->terrorism) {
            $res['Terrorism'] = $this->terrorism;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageAutoFreeze
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ad'])) {
            $model->ad = $map['Ad'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Live'])) {
            $model->live = $map['Live'];
        }
        if (isset($map['Porn'])) {
            $model->porn = $map['Porn'];
        }
        if (isset($map['Terrorism'])) {
            $model->terrorism = $map['Terrorism'];
        }

        return $model;
    }
}
