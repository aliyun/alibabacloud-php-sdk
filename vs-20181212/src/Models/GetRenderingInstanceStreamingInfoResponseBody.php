<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class GetRenderingInstanceStreamingInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $gateway;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flowId' => 'FlowId',
        'gateway' => 'Gateway',
        'hostname' => 'Hostname',
        'port' => 'Port',
        'renderingInstanceId' => 'RenderingInstanceId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
