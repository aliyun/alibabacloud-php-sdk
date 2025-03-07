<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowInputResponseBody;

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
     * @description The source name.
     *
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
     * @example RTMP-PUSH
     *
     * @var string
     */
    public $inputProtocol;

    /**
     * @description The source URL.
     *
     * @example rtmp://1.2.3.4:1935/live/AliTestInput_8666ec062190f00e263012666319a5be
     *
     * @var string
     */
    public $inputUrl;

    /**
     * @description The maximum bitrate. Unit: bit/s.
     *
     * @example 2000000
     *
     * @var int
     */
    public $maxBitrate;

    /**
     * @description The ID of the source flow. This parameter is returned when the source type is Flow.
     *
     * @example 05c3adf4-aa0e-421d-a991-48ceae3e642e
     *
     * @var string
     */
    public $pairFlowId;

    /**
     * @description The output of the source flow. This parameter is returned when the source type is Flow.
     *
     * @example AliTestOutput
     *
     * @var string
     */
    public $pairOutputName;

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
        'inputName'      => 'InputName',
        'inputProtocol'  => 'InputProtocol',
        'inputUrl'       => 'InputUrl',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->inputName) {
            $res['InputName'] = $this->inputName;
        }
        if (null !== $this->inputProtocol) {
            $res['InputProtocol'] = $this->inputProtocol;
        }
        if (null !== $this->inputUrl) {
            $res['InputUrl'] = $this->inputUrl;
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
        if (isset($map['InputName'])) {
            $model->inputName = $map['InputName'];
        }
        if (isset($map['InputProtocol'])) {
            $model->inputProtocol = $map['InputProtocol'];
        }
        if (isset($map['InputUrl'])) {
            $model->inputUrl = $map['InputUrl'];
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
