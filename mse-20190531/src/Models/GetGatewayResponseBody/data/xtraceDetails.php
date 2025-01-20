<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data;

use AlibabaCloud\Dara\Model;

class xtraceDetails extends Model
{
    /**
     * @var int
     */
    public $sample;
    /**
     * @var bool
     */
    public $traceOn;
    protected $_name = [
        'sample'  => 'Sample',
        'traceOn' => 'TraceOn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
