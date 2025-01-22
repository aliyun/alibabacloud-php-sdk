<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class AddMediaConnectFlowInputRequest extends Model
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
     * @var string
     */
    public $inputName;
    /**
     * @var string
     */
    public $inputProtocol;
    /**
     * @var int
     */
    public $maxBitrate;
    /**
     * @var string
     */
    public $pairFlowId;
    /**
     * @var string
     */
    public $pairOutputName;
    /**
     * @var int
     */
    public $srtLatency;
    /**
     * @var string
     */
    public $srtPassphrase;
    /**
     * @var string
     */
    public $srtPbkeyLen;
    /**
     * @var string
     */
    public $srtPbkeylen;
    /**
     * @var string
     */
    public $srtPbkeyssen;
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
        'srtPbkeylen'    => 'SrtPbkeylen',
        'srtPbkeyssen'   => 'SrtPbkeyssen',
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

        if (null !== $this->srtPbkeylen) {
            $res['SrtPbkeylen'] = $this->srtPbkeylen;
        }

        if (null !== $this->srtPbkeyssen) {
            $res['SrtPbkeyssen'] = $this->srtPbkeyssen;
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

        if (isset($map['SrtPbkeylen'])) {
            $model->srtPbkeylen = $map['SrtPbkeylen'];
        }

        if (isset($map['SrtPbkeyssen'])) {
            $model->srtPbkeyssen = $map['SrtPbkeyssen'];
        }

        return $model;
    }
}
