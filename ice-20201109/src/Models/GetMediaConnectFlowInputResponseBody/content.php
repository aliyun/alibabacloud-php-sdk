<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowInputResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $cidrs;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $inputName;
    /**
     * @var string
     */
    public $inputProtocol;
    /**
     * @var string
     */
    public $inputUrl;
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
