<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeSettingResponseBody\ad;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeSettingResponseBody\antispam;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeSettingResponseBody\live;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeSettingResponseBody\porn;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeSettingResponseBody\terrorism;
use AlibabaCloud\Tea\Model;

class DescribeBizTypeSettingResponseBody extends Model
{
    /**
     * @var ad
     */
    public $ad;

    /**
     * @var antispam
     */
    public $antispam;

    /**
     * @var live
     */
    public $live;

    /**
     * @var porn
     */
    public $porn;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var terrorism
     */
    public $terrorism;
    protected $_name = [
        'ad'        => 'Ad',
        'antispam'  => 'Antispam',
        'live'      => 'Live',
        'porn'      => 'Porn',
        'requestId' => 'RequestId',
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
        if (null !== $this->antispam) {
            $res['Antispam'] = null !== $this->antispam ? $this->antispam->toMap() : null;
        }
        if (null !== $this->live) {
            $res['Live'] = null !== $this->live ? $this->live->toMap() : null;
        }
        if (null !== $this->porn) {
            $res['Porn'] = null !== $this->porn ? $this->porn->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->terrorism) {
            $res['Terrorism'] = null !== $this->terrorism ? $this->terrorism->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBizTypeSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ad'])) {
            $model->ad = ad::fromMap($map['Ad']);
        }
        if (isset($map['Antispam'])) {
            $model->antispam = antispam::fromMap($map['Antispam']);
        }
        if (isset($map['Live'])) {
            $model->live = live::fromMap($map['Live']);
        }
        if (isset($map['Porn'])) {
            $model->porn = porn::fromMap($map['Porn']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Terrorism'])) {
            $model->terrorism = terrorism::fromMap($map['Terrorism']);
        }

        return $model;
    }
}
