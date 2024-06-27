<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableDetailResponseBody\resultObject;

use AlibabaCloud\Tea\Model;

class baseInfo extends Model
{
    /**
     * @var string
     */
    public $allowBind;

    /**
     * @var string
     */
    public $chargingMode;

    /**
     * @var string
     */
    public $chargingModeDesc;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $dataDisplay;

    /**
     * @var string
     */
    public $dataThreshold;

    /**
     * @var int
     */
    public $deductionFactor;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $frontAllowBind;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $inputRequired;

    /**
     * @var string
     */
    public $inputs;

    /**
     * @var string
     */
    public $inputsDesc;

    /**
     * @var string
     */
    public $invokeKey;

    /**
     * @var int
     */
    public $invokeRt;

    /**
     * @var string
     */
    public $invokeSuccessRate;

    /**
     * @var int
     */
    public $invokeTimes;

    /**
     * @var string
     */
    public $lastModifiedOperator;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $outputsDesc;

    /**
     * @var string[]
     */
    public $scene;

    /**
     * @var string[]
     */
    public $sceneDesc;

    /**
     * @var string
     */
    public $showOrder;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceDesc;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $supportRegions;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $typeDesc;

    /**
     * @var string
     */
    public $xLabel;

    /**
     * @var string
     */
    public $yLabel;
    protected $_name = [
        'allowBind'            => 'allowBind',
        'chargingMode'         => 'chargingMode',
        'chargingModeDesc'     => 'chargingModeDesc',
        'creator'              => 'creator',
        'dataDisplay'          => 'dataDisplay',
        'dataThreshold'        => 'dataThreshold',
        'deductionFactor'      => 'deductionFactor',
        'description'          => 'description',
        'frontAllowBind'       => 'frontAllowBind',
        'gmtCreate'            => 'gmtCreate',
        'gmtModified'          => 'gmtModified',
        'id'                   => 'id',
        'inputRequired'        => 'inputRequired',
        'inputs'               => 'inputs',
        'inputsDesc'           => 'inputsDesc',
        'invokeKey'            => 'invokeKey',
        'invokeRt'             => 'invokeRt',
        'invokeSuccessRate'    => 'invokeSuccessRate',
        'invokeTimes'          => 'invokeTimes',
        'lastModifiedOperator' => 'lastModifiedOperator',
        'name'                 => 'name',
        'outputs'              => 'outputs',
        'outputsDesc'          => 'outputsDesc',
        'scene'                => 'scene',
        'sceneDesc'            => 'sceneDesc',
        'showOrder'            => 'showOrder',
        'source'               => 'source',
        'sourceDesc'           => 'sourceDesc',
        'status'               => 'status',
        'supportRegions'       => 'supportRegions',
        'title'                => 'title',
        'type'                 => 'type',
        'typeDesc'             => 'typeDesc',
        'xLabel'               => 'xLabel',
        'yLabel'               => 'yLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowBind) {
            $res['allowBind'] = $this->allowBind;
        }
        if (null !== $this->chargingMode) {
            $res['chargingMode'] = $this->chargingMode;
        }
        if (null !== $this->chargingModeDesc) {
            $res['chargingModeDesc'] = $this->chargingModeDesc;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->dataDisplay) {
            $res['dataDisplay'] = $this->dataDisplay;
        }
        if (null !== $this->dataThreshold) {
            $res['dataThreshold'] = $this->dataThreshold;
        }
        if (null !== $this->deductionFactor) {
            $res['deductionFactor'] = $this->deductionFactor;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->frontAllowBind) {
            $res['frontAllowBind'] = $this->frontAllowBind;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->inputRequired) {
            $res['inputRequired'] = $this->inputRequired;
        }
        if (null !== $this->inputs) {
            $res['inputs'] = $this->inputs;
        }
        if (null !== $this->inputsDesc) {
            $res['inputsDesc'] = $this->inputsDesc;
        }
        if (null !== $this->invokeKey) {
            $res['invokeKey'] = $this->invokeKey;
        }
        if (null !== $this->invokeRt) {
            $res['invokeRt'] = $this->invokeRt;
        }
        if (null !== $this->invokeSuccessRate) {
            $res['invokeSuccessRate'] = $this->invokeSuccessRate;
        }
        if (null !== $this->invokeTimes) {
            $res['invokeTimes'] = $this->invokeTimes;
        }
        if (null !== $this->lastModifiedOperator) {
            $res['lastModifiedOperator'] = $this->lastModifiedOperator;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->outputs) {
            $res['outputs'] = $this->outputs;
        }
        if (null !== $this->outputsDesc) {
            $res['outputsDesc'] = $this->outputsDesc;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->sceneDesc) {
            $res['sceneDesc'] = $this->sceneDesc;
        }
        if (null !== $this->showOrder) {
            $res['showOrder'] = $this->showOrder;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->sourceDesc) {
            $res['sourceDesc'] = $this->sourceDesc;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->supportRegions) {
            $res['supportRegions'] = $this->supportRegions;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->typeDesc) {
            $res['typeDesc'] = $this->typeDesc;
        }
        if (null !== $this->xLabel) {
            $res['xLabel'] = $this->xLabel;
        }
        if (null !== $this->yLabel) {
            $res['yLabel'] = $this->yLabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowBind'])) {
            $model->allowBind = $map['allowBind'];
        }
        if (isset($map['chargingMode'])) {
            $model->chargingMode = $map['chargingMode'];
        }
        if (isset($map['chargingModeDesc'])) {
            $model->chargingModeDesc = $map['chargingModeDesc'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['dataDisplay'])) {
            $model->dataDisplay = $map['dataDisplay'];
        }
        if (isset($map['dataThreshold'])) {
            $model->dataThreshold = $map['dataThreshold'];
        }
        if (isset($map['deductionFactor'])) {
            $model->deductionFactor = $map['deductionFactor'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['frontAllowBind'])) {
            $model->frontAllowBind = $map['frontAllowBind'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['inputRequired'])) {
            $model->inputRequired = $map['inputRequired'];
        }
        if (isset($map['inputs'])) {
            $model->inputs = $map['inputs'];
        }
        if (isset($map['inputsDesc'])) {
            $model->inputsDesc = $map['inputsDesc'];
        }
        if (isset($map['invokeKey'])) {
            $model->invokeKey = $map['invokeKey'];
        }
        if (isset($map['invokeRt'])) {
            $model->invokeRt = $map['invokeRt'];
        }
        if (isset($map['invokeSuccessRate'])) {
            $model->invokeSuccessRate = $map['invokeSuccessRate'];
        }
        if (isset($map['invokeTimes'])) {
            $model->invokeTimes = $map['invokeTimes'];
        }
        if (isset($map['lastModifiedOperator'])) {
            $model->lastModifiedOperator = $map['lastModifiedOperator'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['outputs'])) {
            $model->outputs = $map['outputs'];
        }
        if (isset($map['outputsDesc'])) {
            $model->outputsDesc = $map['outputsDesc'];
        }
        if (isset($map['scene'])) {
            if (!empty($map['scene'])) {
                $model->scene = $map['scene'];
            }
        }
        if (isset($map['sceneDesc'])) {
            if (!empty($map['sceneDesc'])) {
                $model->sceneDesc = $map['sceneDesc'];
            }
        }
        if (isset($map['showOrder'])) {
            $model->showOrder = $map['showOrder'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['sourceDesc'])) {
            $model->sourceDesc = $map['sourceDesc'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['supportRegions'])) {
            if (!empty($map['supportRegions'])) {
                $model->supportRegions = $map['supportRegions'];
            }
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['typeDesc'])) {
            $model->typeDesc = $map['typeDesc'];
        }
        if (isset($map['xLabel'])) {
            $model->xLabel = $map['xLabel'];
        }
        if (isset($map['yLabel'])) {
            $model->yLabel = $map['yLabel'];
        }

        return $model;
    }
}
