<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GatewayOption;

use AlibabaCloud\Tea\Model;

class traceDetails extends Model
{
    /**
     * @description trace 采样率
     *
     * @var int
     */
    public $sample;

    /**
     * @description trace是否开启
     *
     * @var bool
     */
    public $traceEnabled;
    protected $_name = [
        'sample'       => 'Sample',
        'traceEnabled' => 'TraceEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
        }
        if (null !== $this->traceEnabled) {
            $res['TraceEnabled'] = $this->traceEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }
        if (isset($map['TraceEnabled'])) {
            $model->traceEnabled = $map['TraceEnabled'];
        }

        return $model;
    }
}
