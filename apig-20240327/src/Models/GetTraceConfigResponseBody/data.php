<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetTraceConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var int
     */
    public $sampleRatio;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var string
     */
    public $servicePort;
    /**
     * @var string
     */
    public $traceType;
    protected $_name = [
        'enable'      => 'enable',
        'sampleRatio' => 'sampleRatio',
        'serviceId'   => 'serviceId',
        'servicePort' => 'servicePort',
        'traceType'   => 'traceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->sampleRatio) {
            $res['sampleRatio'] = $this->sampleRatio;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->servicePort) {
            $res['servicePort'] = $this->servicePort;
        }

        if (null !== $this->traceType) {
            $res['traceType'] = $this->traceType;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['sampleRatio'])) {
            $model->sampleRatio = $map['sampleRatio'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['servicePort'])) {
            $model->servicePort = $map['servicePort'];
        }

        if (isset($map['traceType'])) {
            $model->traceType = $map['traceType'];
        }

        return $model;
    }
}
