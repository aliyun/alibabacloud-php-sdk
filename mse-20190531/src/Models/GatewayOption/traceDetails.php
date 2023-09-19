<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GatewayOption;

use AlibabaCloud\Tea\Model;

class traceDetails extends Model
{
    /**
     * @var int
     */
    public $sample;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $servicePort;

    /**
     * @var bool
     */
    public $traceEnabled;

    /**
     * @example XTRACE
     *
     * @var string
     */
    public $traceType;
    protected $_name = [
        'sample'       => 'Sample',
        'serviceId'    => 'ServiceId',
        'servicePort'  => 'ServicePort',
        'traceEnabled' => 'TraceEnabled',
        'traceType'    => 'TraceType',
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
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }
        if (null !== $this->traceEnabled) {
            $res['TraceEnabled'] = $this->traceEnabled;
        }
        if (null !== $this->traceType) {
            $res['TraceType'] = $this->traceType;
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
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }
        if (isset($map['TraceEnabled'])) {
            $model->traceEnabled = $map['TraceEnabled'];
        }
        if (isset($map['TraceType'])) {
            $model->traceType = $map['TraceType'];
        }

        return $model;
    }
}
