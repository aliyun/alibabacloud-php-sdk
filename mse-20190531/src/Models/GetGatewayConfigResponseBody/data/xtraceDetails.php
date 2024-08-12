<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class xtraceDetails extends Model
{
    /**
     * @example 500
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @example gw-61f465fa2dd044069e2208c4912*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example 2024-08-12T09:39:07.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-08-12T09:39:07.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 255
     *
     * @var int
     */
    public $id;

    /**
     * @example 100
     *
     * @var int
     */
    public $sample;

    /**
     * @example 333
     *
     * @var int
     */
    public $serviceId;

    /**
     * @example 8888
     *
     * @var string
     */
    public $servicePort;

    /**
     * @example true
     *
     * @var bool
     */
    public $traceOn;

    /**
     * @example OPENTELEMETRY
     *
     * @var string
     */
    public $traceType;
    protected $_name = [
        'gatewayId'       => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'sample'          => 'Sample',
        'serviceId'       => 'ServiceId',
        'servicePort'     => 'ServicePort',
        'traceOn'         => 'TraceOn',
        'traceType'       => 'TraceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }
        if (null !== $this->traceOn) {
            $res['TraceOn'] = $this->traceOn;
        }
        if (null !== $this->traceType) {
            $res['TraceType'] = $this->traceType;
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
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }
        if (isset($map['TraceOn'])) {
            $model->traceOn = $map['TraceOn'];
        }
        if (isset($map['TraceType'])) {
            $model->traceType = $map['TraceType'];
        }

        return $model;
    }
}
