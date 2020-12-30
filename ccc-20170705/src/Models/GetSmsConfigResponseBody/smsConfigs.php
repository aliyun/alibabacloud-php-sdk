<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetSmsConfigResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetSmsConfigResponseBody\smsConfigs\smsConfig;
use AlibabaCloud\Tea\Model;

class smsConfigs extends Model
{
    /**
     * @var smsConfig[]
     */
    public $smsConfig;
    protected $_name = [
        'smsConfig' => 'SmsConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->smsConfig) {
            $res['SmsConfig'] = [];
            if (null !== $this->smsConfig && \is_array($this->smsConfig)) {
                $n = 0;
                foreach ($this->smsConfig as $item) {
                    $res['SmsConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smsConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SmsConfig'])) {
            if (!empty($map['SmsConfig'])) {
                $model->smsConfig = [];
                $n                = 0;
                foreach ($map['SmsConfig'] as $item) {
                    $model->smsConfig[$n++] = null !== $item ? smsConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
