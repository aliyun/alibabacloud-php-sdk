<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowOutputResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The IP address whitelist in CIDR format. CIDR blocks are separated with commas (,).
     *
     * @example 10.211.0.0/17
     *
     * @var string
     */
    public $cidrs;

    /**
     * @description The time when the flow was created.
     *
     * @example 2024-07-18T01:29:24Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The output name.
     *
     * @example AliTestInput
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
     * @example SRT-PULL
     *
     * @var string
     */
    public $outputProtocol;

    /**
     * @description The output URL.
     *
     * @example srt://1.2.3.4:1025
     *
     * @var string
     */
    public $outputUrl;

    /**
     * @description The ID of the destination flow. This parameter is returned when the output type is Flow.
     *
     * @example 805fbdd0-575e-4146-b35d-ec7f63937b20
     *
     * @var string
     */
    public $pairFlowId;

    /**
     * @description The source name of the destination flow. This parameter is returned when the output type is Flow.
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
     * @description The latency for the SRT stream. Unit: milliseconds. This parameter is returned when the source type is SRT-Listener or SRT-Caller.
     *
     * @example 1000
     *
     * @var int
     */
    public $srtLatency;

    /**
     * @description The SRT key. This parameter is returned when the source type is SRT-Listener or SRT-Caller.
     *
     * @example FICUBPX4Q77DYHRF
     *
     * @var string
     */
    public $srtPassphrase;

    /**
     * @description The encryption key length. This parameter is returned when the source type is SRT-Listener or SRT-Caller.
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
     * @var int
     */
    public $srtPbkeyLen;
    protected $_name = [
        'cidrs'          => 'Cidrs',
        'createTime'     => 'CreateTime',
        'outputName'     => 'OutputName',
        'outputProtocol' => 'OutputProtocol',
        'outputUrl'      => 'OutputUrl',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->outputName) {
            $res['OutputName'] = $this->outputName;
        }
        if (null !== $this->outputProtocol) {
            $res['OutputProtocol'] = $this->outputProtocol;
        }
        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
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
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidrs'])) {
            $model->cidrs = $map['Cidrs'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['OutputName'])) {
            $model->outputName = $map['OutputName'];
        }
        if (isset($map['OutputProtocol'])) {
            $model->outputProtocol = $map['OutputProtocol'];
        }
        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
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
