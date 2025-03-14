<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaConnectFlowOutputRequest extends Model
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
     *
     * @example 34900dc6-90ec-4968-af3c-fcd87f231a5f
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The output name.
     *
     * This parameter is required.
     *
     * @example AliTestOutput
     *
     * @var string
     */
    public $outputName;

    /**
     * @description The output URL. You can modify this parameter only when the output type is RTMP-PUSH or SRT-Caller.
     *
     * @example rtmp://push.test.alivecdn.com/live/alitest
     *
     * @var string
     */
    public $outputToUrl;

    /**
     * @description The maximum number of viewers.
     *
     * @example 5
     *
     * @var string
     */
    public $playerLimit;

    /**
     * @description The latency for the SRT stream. You can modify this parameter only when the source type is SRT-Listener or SRT-Caller.
     *
     * @example 1000
     *
     * @var string
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
     * @var string
     */
    public $srtPbkeyLen;
    protected $_name = [
        'cidrs' => 'Cidrs',
        'flowId' => 'FlowId',
        'outputName' => 'OutputName',
        'outputToUrl' => 'OutputToUrl',
        'playerLimit' => 'PlayerLimit',
        'srtLatency' => 'SrtLatency',
        'srtPassphrase' => 'SrtPassphrase',
        'srtPbkeyLen' => 'SrtPbkeyLen',
    ];

    public function validate() {}

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
        if (null !== $this->outputToUrl) {
            $res['OutputToUrl'] = $this->outputToUrl;
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
     * @return UpdateMediaConnectFlowOutputRequest
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
        if (isset($map['OutputToUrl'])) {
            $model->outputToUrl = $map['OutputToUrl'];
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
