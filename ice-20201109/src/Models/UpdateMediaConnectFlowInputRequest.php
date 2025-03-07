<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaConnectFlowInputRequest extends Model
{
    /**
     * @description The IP address whitelist.
     *
     * @example 19.168.1.1/32,18.168.1.1/16
     *
     * @var string
     */
    public $cidrs;

    /**
     * @description The flow ID.
     *
     * This parameter is required.
     * @example 34900dc6-90ec-4968-af3c-fcd87f231a5f
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The source URL. You can modify this parameter only when the source type is RTMP-PULL or SRT-Listener.
     *
     * @example rtmp://pull.test.alivecdn.com/live/alitest
     *
     * @var string
     */
    public $inputFromUrl;

    /**
     * @description The maximum bitrate. Unit: bit/s.
     *
     * @example 2000000
     *
     * @var int
     */
    public $maxBitrate;

    /**
     * @description The latency for the SRT stream. You can modify this parameter only when the source type is SRT-Listener or SRT-Caller.
     *
     * @example 1000
     *
     * @var int
     */
    public $srtLatency;

    /**
     * @description The SRT key. You can modify this parameter only when the source type is SRT-Listener or SRT-Caller.
     *
     * @example FICUBPX4Q77DYHRF
     *
     * @var string
     */
    public $srtPassphrase;

    /**
     * @description The encryption key length. You can modify this parameter only when the source type is SRT-Listener or SRT-Caller.
     *
     * @example 32
     *
     * @var int
     */
    public $srtPbkeyLen;
    protected $_name = [
        'cidrs'         => 'Cidrs',
        'flowId'        => 'FlowId',
        'inputFromUrl'  => 'InputFromUrl',
        'maxBitrate'    => 'MaxBitrate',
        'srtLatency'    => 'SrtLatency',
        'srtPassphrase' => 'SrtPassphrase',
        'srtPbkeyLen'   => 'SrtPbkeyLen',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrs) {
            $res['Cidrs'] = $this->cidrs;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->inputFromUrl) {
            $res['InputFromUrl'] = $this->inputFromUrl;
        }
        if (null !== $this->maxBitrate) {
            $res['MaxBitrate'] = $this->maxBitrate;
        }
        if (null !== $this->srtLatency) {
            $res['SrtLatency'] = $this->srtLatency;
        }
        if (null !== $this->srtPassphrase) {
            $res['SrtPassphrase'] = $this->srtPassphrase;
        }
        if (null !== $this->srtPbkeyLen) {
            $res['SrtPbkeyLen'] = $this->srtPbkeyLen;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMediaConnectFlowInputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidrs'])) {
            $model->cidrs = $map['Cidrs'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['InputFromUrl'])) {
            $model->inputFromUrl = $map['InputFromUrl'];
        }
        if (isset($map['MaxBitrate'])) {
            $model->maxBitrate = $map['MaxBitrate'];
        }
        if (isset($map['SrtLatency'])) {
            $model->srtLatency = $map['SrtLatency'];
        }
        if (isset($map['SrtPassphrase'])) {
            $model->srtPassphrase = $map['SrtPassphrase'];
        }
        if (isset($map['SrtPbkeyLen'])) {
            $model->srtPbkeyLen = $map['SrtPbkeyLen'];
        }

        return $model;
    }
}
