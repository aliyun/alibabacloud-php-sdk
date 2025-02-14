<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateMediaConnectFlowInputRequest extends Model
{
    /**
     * @var string
     */
    public $cidrs;
    /**
     * @var string
     */
    public $flowId;
    /**
     * @var string
     */
    public $inputFromUrl;
    /**
     * @var int
     */
    public $maxBitrate;
    /**
     * @var int
     */
    public $srtLatency;
    /**
     * @var string
     */
    public $srtPassphrase;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
