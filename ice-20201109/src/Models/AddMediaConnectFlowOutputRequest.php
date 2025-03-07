<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AddMediaConnectFlowOutputRequest extends Model
{
    /**
     * @description The IP address whitelist in CIDR format. Separate multiple CIDR blocks with commas (,).
     *
     * @example 83.17.231.31/32
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
     * @description The output name.
     *
     * This parameter is required.
     * @example AliTestOutput
     *
     * @var string
     */
    public $outputName;

    /**
     * @description The output type.
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
     * @example RTMP-PULL
     *
     * @var string
     */
    public $outputProtocol;

    /**
     * @description The output URL. This parameter is required when OutputProtocol is set to RTMP-PUSH or SRT-Caller.
     *
     * @example rtmp://push.test.alivecdn.com/live/alitest
     *
     * @var string
     */
    public $outputToUrl;

    /**
     * @description The ID of the destination flow. This parameter is required when OutputProtocol is set to Flow.
     *
     * @example 8666ec062190f00e263012666319a5be
     *
     * @var string
     */
    public $pairFlowId;

    /**
     * @description The source name of the destination flow. This parameter is required when OutputProtocol is set to Flow.
     *
     * @example AliTestInput
     *
     * @var string
     */
    public $pairInputName;

    /**
     * @description The maximum number of viewers.
     *
     * @example 5
     *
     * @var int
     */
    public $playerLimit;

    /**
     * @description The latency for the SRT stream. This parameter is required when the source type is SRT-Listener or SRT-Caller.
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
     * @example 32
     *
     * @var string
     */
    public $srtPbkeyLen;
    protected $_name = [
        'cidrs'          => 'Cidrs',
        'flowId'         => 'FlowId',
        'outputName'     => 'OutputName',
        'outputProtocol' => 'OutputProtocol',
        'outputToUrl'    => 'OutputToUrl',
        'pairFlowId'     => 'PairFlowId',
        'pairInputName'  => 'PairInputName',
        'playerLimit'    => 'PlayerLimit',
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
        if (null !== $this->outputName) {
            $res['OutputName'] = $this->outputName;
        }
        if (null !== $this->outputProtocol) {
            $res['OutputProtocol'] = $this->outputProtocol;
        }
        if (null !== $this->outputToUrl) {
            $res['OutputToUrl'] = $this->outputToUrl;
        }
        if (null !== $this->pairFlowId) {
            $res['PairFlowId'] = $this->pairFlowId;
        }
        if (null !== $this->pairInputName) {
            $res['PairInputName'] = $this->pairInputName;
        }
        if (null !== $this->playerLimit) {
            $res['PlayerLimit'] = $this->playerLimit;
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
     * @return AddMediaConnectFlowOutputRequest
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
        if (isset($map['OutputName'])) {
            $model->outputName = $map['OutputName'];
        }
        if (isset($map['OutputProtocol'])) {
            $model->outputProtocol = $map['OutputProtocol'];
        }
        if (isset($map['OutputToUrl'])) {
            $model->outputToUrl = $map['OutputToUrl'];
        }
        if (isset($map['PairFlowId'])) {
            $model->pairFlowId = $map['PairFlowId'];
        }
        if (isset($map['PairInputName'])) {
            $model->pairInputName = $map['PairInputName'];
        }
        if (isset($map['PlayerLimit'])) {
            $model->playerLimit = $map['PlayerLimit'];
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
