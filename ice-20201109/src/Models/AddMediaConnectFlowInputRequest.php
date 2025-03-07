<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AddMediaConnectFlowInputRequest extends Model
{
    /**
     * @description The IP address whitelist in CIDR format. Separate multiple CIDR blocks with commas (,).
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
     * @description The source URL. This parameter is required when the source type is RTMP-PULL or SRT-Listener.
     *
     * @example rtmp://pull.test.alivecdn.com/live/alitest
     *
     * @var string
     */
    public $inputFromUrl;

    /**
     * @description The source name.
     *
     * This parameter is required.
     * @example AliTestInput
     *
     * @var string
     */
    public $inputName;

    /**
     * @description The source type.
     *
     * Valid values:
     *
     *   RTMP-PUSH
     *   SRT-Caller
     *   RTMP-PULL
     *   SRT-Listener
     *   Flow
     *
     * This parameter is required.
     * @example RTMP-PUSH
     *
     * @var string
     */
    public $inputProtocol;

    /**
     * @description The maximum bitrate. Unit: bit/s.
     *
     * @example 2000000
     *
     * @var int
     */
    public $maxBitrate;

    /**
     * @description The ID of the source flow. This parameter is required when the source type is Flow.
     *
     * @example 805fbdd0-575e-4146-b35d-ec7f63937b20
     *
     * @var string
     */
    public $pairFlowId;

    /**
     * @description The output of the source flow. This parameter is required when the source type is Flow.
     *
     * @example AliTestOutput
     *
     * @var string
     */
    public $pairOutputName;

    /**
     * @description The latency for the SRT stream. This parameter is required the source type is SRT-Listener or SRT-Caller.
     *
     * @example 1000
     *
     * @var int
     */
    public $srtLatency;

    /**
     * @description The SRT key. This parameter is required when the source type is SRT-Listener or SRT-Caller.
     *
     * @example BETTERG08S01
     *
     * @var string
     */
    public $srtPassphrase;

    /**
     * @description The encryption key length. This parameter is required when the source type is SRT-Listener or SRT-Caller.
     *
     * Valid values:
     *
     *   0
     *   16
     *   24
     *   32
     *
     * @example 32
     *
     * @var string
     */
    public $srtPbkeyLen;
    protected $_name = [
        'cidrs'          => 'Cidrs',
        'flowId'         => 'FlowId',
        'inputFromUrl'   => 'InputFromUrl',
        'inputName'      => 'InputName',
        'inputProtocol'  => 'InputProtocol',
        'maxBitrate'     => 'MaxBitrate',
        'pairFlowId'     => 'PairFlowId',
        'pairOutputName' => 'PairOutputName',
        'srtLatency'     => 'SrtLatency',
        'srtPassphrase'  => 'SrtPassphrase',
        'srtPbkeyLen'    => 'SrtPbkeyLen',
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
        if (null !== $this->inputName) {
            $res['InputName'] = $this->inputName;
        }
        if (null !== $this->inputProtocol) {
            $res['InputProtocol'] = $this->inputProtocol;
        }
        if (null !== $this->maxBitrate) {
            $res['MaxBitrate'] = $this->maxBitrate;
        }
        if (null !== $this->pairFlowId) {
            $res['PairFlowId'] = $this->pairFlowId;
        }
        if (null !== $this->pairOutputName) {
            $res['PairOutputName'] = $this->pairOutputName;
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
     * @return AddMediaConnectFlowInputRequest
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
        if (isset($map['InputName'])) {
            $model->inputName = $map['InputName'];
        }
        if (isset($map['InputProtocol'])) {
            $model->inputProtocol = $map['InputProtocol'];
        }
        if (isset($map['MaxBitrate'])) {
            $model->maxBitrate = $map['MaxBitrate'];
        }
        if (isset($map['PairFlowId'])) {
            $model->pairFlowId = $map['PairFlowId'];
        }
        if (isset($map['PairOutputName'])) {
            $model->pairOutputName = $map['PairOutputName'];
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
