<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowInputResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $backupCidrs;

    /**
     * @var string
     */
    public $backupCreateTime;

    /**
     * @var string
     */
    public $backupInputName;

    /**
     * @var string
     */
    public $backupInputStatus;

    /**
     * @var string
     */
    public $backupInputUrl;

    /**
     * @var int
     */
    public $backupMaxBitrate;

    /**
     * @var int
     */
    public $backupSrtLatency;

    /**
     * @var string
     */
    public $backupSrtPassphrase;

    /**
     * @var int
     */
    public $backupSrtPbkeyLen;

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
    public $inputStatus;

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
        'backupCidrs' => 'BackupCidrs',
        'backupCreateTime' => 'BackupCreateTime',
        'backupInputName' => 'BackupInputName',
        'backupInputStatus' => 'BackupInputStatus',
        'backupInputUrl' => 'BackupInputUrl',
        'backupMaxBitrate' => 'BackupMaxBitrate',
        'backupSrtLatency' => 'BackupSrtLatency',
        'backupSrtPassphrase' => 'BackupSrtPassphrase',
        'backupSrtPbkeyLen' => 'BackupSrtPbkeyLen',
        'cidrs' => 'Cidrs',
        'createTime' => 'CreateTime',
        'inputName' => 'InputName',
        'inputProtocol' => 'InputProtocol',
        'inputStatus' => 'InputStatus',
        'inputUrl' => 'InputUrl',
        'maxBitrate' => 'MaxBitrate',
        'pairFlowId' => 'PairFlowId',
        'pairOutputName' => 'PairOutputName',
        'srtLatency' => 'SrtLatency',
        'srtPassphrase' => 'SrtPassphrase',
        'srtPbkeyLen' => 'SrtPbkeyLen',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupCidrs) {
            $res['BackupCidrs'] = $this->backupCidrs;
        }

        if (null !== $this->backupCreateTime) {
            $res['BackupCreateTime'] = $this->backupCreateTime;
        }

        if (null !== $this->backupInputName) {
            $res['BackupInputName'] = $this->backupInputName;
        }

        if (null !== $this->backupInputStatus) {
            $res['BackupInputStatus'] = $this->backupInputStatus;
        }

        if (null !== $this->backupInputUrl) {
            $res['BackupInputUrl'] = $this->backupInputUrl;
        }

        if (null !== $this->backupMaxBitrate) {
            $res['BackupMaxBitrate'] = $this->backupMaxBitrate;
        }

        if (null !== $this->backupSrtLatency) {
            $res['BackupSrtLatency'] = $this->backupSrtLatency;
        }

        if (null !== $this->backupSrtPassphrase) {
            $res['BackupSrtPassphrase'] = $this->backupSrtPassphrase;
        }

        if (null !== $this->backupSrtPbkeyLen) {
            $res['BackupSrtPbkeyLen'] = $this->backupSrtPbkeyLen;
        }

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

        if (null !== $this->inputStatus) {
            $res['InputStatus'] = $this->inputStatus;
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
        if (isset($map['BackupCidrs'])) {
            $model->backupCidrs = $map['BackupCidrs'];
        }

        if (isset($map['BackupCreateTime'])) {
            $model->backupCreateTime = $map['BackupCreateTime'];
        }

        if (isset($map['BackupInputName'])) {
            $model->backupInputName = $map['BackupInputName'];
        }

        if (isset($map['BackupInputStatus'])) {
            $model->backupInputStatus = $map['BackupInputStatus'];
        }

        if (isset($map['BackupInputUrl'])) {
            $model->backupInputUrl = $map['BackupInputUrl'];
        }

        if (isset($map['BackupMaxBitrate'])) {
            $model->backupMaxBitrate = $map['BackupMaxBitrate'];
        }

        if (isset($map['BackupSrtLatency'])) {
            $model->backupSrtLatency = $map['BackupSrtLatency'];
        }

        if (isset($map['BackupSrtPassphrase'])) {
            $model->backupSrtPassphrase = $map['BackupSrtPassphrase'];
        }

        if (isset($map['BackupSrtPbkeyLen'])) {
            $model->backupSrtPbkeyLen = $map['BackupSrtPbkeyLen'];
        }

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

        if (isset($map['InputStatus'])) {
            $model->inputStatus = $map['InputStatus'];
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
