<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data;

use AlibabaCloud\Tea\Model;

class xtraceDetails extends Model
{
    /**
     * @description The sampling rate of Tracing Analysis.
     *
     * @example 10
     *
     * @var int
     */
    public $sample;

    /**
     * @description Indicates whether sampling by using Tracing Analysis is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $traceOn;
    protected $_name = [
        'sample' => 'Sample',
        'traceOn' => 'TraceOn',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
        }
        if (null !== $this->traceOn) {
            $res['TraceOn'] = $this->traceOn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return xtraceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }
        if (isset($map['TraceOn'])) {
            $model->traceOn = $map['TraceOn'];
        }

        return $model;
    }
}
