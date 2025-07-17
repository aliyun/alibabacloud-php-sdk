<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\bonreeSDKConfig;

use AlibabaCloud\Tea\Model;

class samplingConfig extends Model
{
    /**
     * @description Sampling rate: between (0, 1000], a thousandth.
     *
     * @example 500
     *
     * @var int
     */
    public $samplingRate;

    /**
     * @description Sampling type, currently only session random sampling is supported, that is, fixed transmission: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $samplingType;
    protected $_name = [
        'samplingRate' => 'samplingRate',
        'samplingType' => 'samplingType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->samplingRate) {
            $res['samplingRate'] = $this->samplingRate;
        }
        if (null !== $this->samplingType) {
            $res['samplingType'] = $this->samplingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return samplingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['samplingRate'])) {
            $model->samplingRate = $map['samplingRate'];
        }
        if (isset($map['samplingType'])) {
            $model->samplingType = $map['samplingType'];
        }

        return $model;
    }
}
