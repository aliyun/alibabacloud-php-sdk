<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveInputResponseBody\input;

use AlibabaCloud\Dara\Model;

class inputInfos extends Model
{
    /**
     * @var string
     */
    public $destHost;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowOutputName;

    /**
     * @var string
     */
    public $monitorUrl;

    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var int
     */
    public $srtLatency;

    /**
     * @var int
     */
    public $srtMaxBitrate;

    /**
     * @var string
     */
    public $srtPassphrase;

    /**
     * @var int
     */
    public $srtPbKeyLen;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'destHost' => 'DestHost',
        'flowId' => 'FlowId',
        'flowOutputName' => 'FlowOutputName',
        'monitorUrl' => 'MonitorUrl',
        'sourceUrl' => 'SourceUrl',
        'srtLatency' => 'SrtLatency',
        'srtMaxBitrate' => 'SrtMaxBitrate',
        'srtPassphrase' => 'SrtPassphrase',
        'srtPbKeyLen' => 'SrtPbKeyLen',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destHost) {
            $res['DestHost'] = $this->destHost;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowOutputName) {
            $res['FlowOutputName'] = $this->flowOutputName;
        }

        if (null !== $this->monitorUrl) {
            $res['MonitorUrl'] = $this->monitorUrl;
        }

        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }

        if (null !== $this->srtLatency) {
            $res['SrtLatency'] = $this->srtLatency;
        }

        if (null !== $this->srtMaxBitrate) {
            $res['SrtMaxBitrate'] = $this->srtMaxBitrate;
        }

        if (null !== $this->srtPassphrase) {
            $res['SrtPassphrase'] = $this->srtPassphrase;
        }

        if (null !== $this->srtPbKeyLen) {
            $res['SrtPbKeyLen'] = $this->srtPbKeyLen;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
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
        if (isset($map['DestHost'])) {
            $model->destHost = $map['DestHost'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowOutputName'])) {
            $model->flowOutputName = $map['FlowOutputName'];
        }

        if (isset($map['MonitorUrl'])) {
            $model->monitorUrl = $map['MonitorUrl'];
        }

        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }

        if (isset($map['SrtLatency'])) {
            $model->srtLatency = $map['SrtLatency'];
        }

        if (isset($map['SrtMaxBitrate'])) {
            $model->srtMaxBitrate = $map['SrtMaxBitrate'];
        }

        if (isset($map['SrtPassphrase'])) {
            $model->srtPassphrase = $map['SrtPassphrase'];
        }

        if (isset($map['SrtPbKeyLen'])) {
            $model->srtPbKeyLen = $map['SrtPbKeyLen'];
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
