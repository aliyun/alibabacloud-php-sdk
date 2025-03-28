<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployOllamaModelInput\modelConfig;

use AlibabaCloud\Dara\Model;

class fmkOllamaConfig extends Model
{
    /**
     * @var float
     */
    public $minP;

    /**
     * @var int
     */
    public $mirostat;

    /**
     * @var float
     */
    public $mirostatEta;

    /**
     * @var float
     */
    public $mirostatTau;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelfileAdapter;

    /**
     * @var string
     */
    public $modelfileAdditionalFromsString;

    /**
     * @var string
     */
    public $modelfileFullTextPostfix;

    /**
     * @var string
     */
    public $modelfileParams;

    /**
     * @var string
     */
    public $modelfileSystem;

    /**
     * @var string
     */
    public $modelfileTemplate;

    /**
     * @var int
     */
    public $numCtx;

    /**
     * @var int
     */
    public $numPredict;

    /**
     * @var string
     */
    public $quantize;

    /**
     * @var int
     */
    public $repeatLastN;

    /**
     * @var float
     */
    public $repeatPenalty;

    /**
     * @var int
     */
    public $seed;

    /**
     * @var string
     */
    public $singleModelFile;

    /**
     * @var string
     */
    public $splitedModelStartFile;

    /**
     * @var string
     */
    public $stop;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var float
     */
    public $tfsZ;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var float
     */
    public $topP;
    protected $_name = [
        'minP' => 'minP',
        'mirostat' => 'mirostat',
        'mirostatEta' => 'mirostatEta',
        'mirostatTau' => 'mirostatTau',
        'modelName' => 'modelName',
        'modelfileAdapter' => 'modelfileAdapter',
        'modelfileAdditionalFromsString' => 'modelfileAdditionalFromsString',
        'modelfileFullTextPostfix' => 'modelfileFullTextPostfix',
        'modelfileParams' => 'modelfileParams',
        'modelfileSystem' => 'modelfileSystem',
        'modelfileTemplate' => 'modelfileTemplate',
        'numCtx' => 'numCtx',
        'numPredict' => 'numPredict',
        'quantize' => 'quantize',
        'repeatLastN' => 'repeatLastN',
        'repeatPenalty' => 'repeatPenalty',
        'seed' => 'seed',
        'singleModelFile' => 'singleModelFile',
        'splitedModelStartFile' => 'splitedModelStartFile',
        'stop' => 'stop',
        'stream' => 'stream',
        'temperature' => 'temperature',
        'tfsZ' => 'tfsZ',
        'topK' => 'topK',
        'topP' => 'topP',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->minP) {
            $res['minP'] = $this->minP;
        }

        if (null !== $this->mirostat) {
            $res['mirostat'] = $this->mirostat;
        }

        if (null !== $this->mirostatEta) {
            $res['mirostatEta'] = $this->mirostatEta;
        }

        if (null !== $this->mirostatTau) {
            $res['mirostatTau'] = $this->mirostatTau;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelfileAdapter) {
            $res['modelfileAdapter'] = $this->modelfileAdapter;
        }

        if (null !== $this->modelfileAdditionalFromsString) {
            $res['modelfileAdditionalFromsString'] = $this->modelfileAdditionalFromsString;
        }

        if (null !== $this->modelfileFullTextPostfix) {
            $res['modelfileFullTextPostfix'] = $this->modelfileFullTextPostfix;
        }

        if (null !== $this->modelfileParams) {
            $res['modelfileParams'] = $this->modelfileParams;
        }

        if (null !== $this->modelfileSystem) {
            $res['modelfileSystem'] = $this->modelfileSystem;
        }

        if (null !== $this->modelfileTemplate) {
            $res['modelfileTemplate'] = $this->modelfileTemplate;
        }

        if (null !== $this->numCtx) {
            $res['numCtx'] = $this->numCtx;
        }

        if (null !== $this->numPredict) {
            $res['numPredict'] = $this->numPredict;
        }

        if (null !== $this->quantize) {
            $res['quantize'] = $this->quantize;
        }

        if (null !== $this->repeatLastN) {
            $res['repeatLastN'] = $this->repeatLastN;
        }

        if (null !== $this->repeatPenalty) {
            $res['repeatPenalty'] = $this->repeatPenalty;
        }

        if (null !== $this->seed) {
            $res['seed'] = $this->seed;
        }

        if (null !== $this->singleModelFile) {
            $res['singleModelFile'] = $this->singleModelFile;
        }

        if (null !== $this->splitedModelStartFile) {
            $res['splitedModelStartFile'] = $this->splitedModelStartFile;
        }

        if (null !== $this->stop) {
            $res['stop'] = $this->stop;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->temperature) {
            $res['temperature'] = $this->temperature;
        }

        if (null !== $this->tfsZ) {
            $res['tfsZ'] = $this->tfsZ;
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        if (null !== $this->topP) {
            $res['topP'] = $this->topP;
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
        if (isset($map['minP'])) {
            $model->minP = $map['minP'];
        }

        if (isset($map['mirostat'])) {
            $model->mirostat = $map['mirostat'];
        }

        if (isset($map['mirostatEta'])) {
            $model->mirostatEta = $map['mirostatEta'];
        }

        if (isset($map['mirostatTau'])) {
            $model->mirostatTau = $map['mirostatTau'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelfileAdapter'])) {
            $model->modelfileAdapter = $map['modelfileAdapter'];
        }

        if (isset($map['modelfileAdditionalFromsString'])) {
            $model->modelfileAdditionalFromsString = $map['modelfileAdditionalFromsString'];
        }

        if (isset($map['modelfileFullTextPostfix'])) {
            $model->modelfileFullTextPostfix = $map['modelfileFullTextPostfix'];
        }

        if (isset($map['modelfileParams'])) {
            $model->modelfileParams = $map['modelfileParams'];
        }

        if (isset($map['modelfileSystem'])) {
            $model->modelfileSystem = $map['modelfileSystem'];
        }

        if (isset($map['modelfileTemplate'])) {
            $model->modelfileTemplate = $map['modelfileTemplate'];
        }

        if (isset($map['numCtx'])) {
            $model->numCtx = $map['numCtx'];
        }

        if (isset($map['numPredict'])) {
            $model->numPredict = $map['numPredict'];
        }

        if (isset($map['quantize'])) {
            $model->quantize = $map['quantize'];
        }

        if (isset($map['repeatLastN'])) {
            $model->repeatLastN = $map['repeatLastN'];
        }

        if (isset($map['repeatPenalty'])) {
            $model->repeatPenalty = $map['repeatPenalty'];
        }

        if (isset($map['seed'])) {
            $model->seed = $map['seed'];
        }

        if (isset($map['singleModelFile'])) {
            $model->singleModelFile = $map['singleModelFile'];
        }

        if (isset($map['splitedModelStartFile'])) {
            $model->splitedModelStartFile = $map['splitedModelStartFile'];
        }

        if (isset($map['stop'])) {
            $model->stop = $map['stop'];
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['temperature'])) {
            $model->temperature = $map['temperature'];
        }

        if (isset($map['tfsZ'])) {
            $model->tfsZ = $map['tfsZ'];
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        if (isset($map['topP'])) {
            $model->topP = $map['topP'];
        }

        return $model;
    }
}
