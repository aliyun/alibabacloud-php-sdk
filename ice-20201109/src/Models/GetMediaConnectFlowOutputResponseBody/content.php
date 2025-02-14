<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowOutputResponseBody;

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
    public $outputName;
    /**
     * @var string
     */
    public $outputProtocol;
    /**
     * @var string
     */
    public $outputUrl;
    /**
     * @var string
     */
    public $pairFlowId;
    /**
     * @var string
     */
    public $pairInputName;
    /**
     * @var int
     */
    public $playerLimit;
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
