<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateSceneModelRequest extends Model
{
    /**
     * @var string
     */
    public $fcFunctionName;

    /**
     * @var string
     */
    public $fcHandler;

    /**
     * @var string
     */
    public $fcInitializer;

    /**
     * @var string
     */
    public $fcRegionNo;

    /**
     * @var string
     */
    public $fcServiceName;

    /**
     * @var string
     */
    public $modelDesc;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var int
     */
    public $modelLanguage;

    /**
     * @var string
     */
    public $modelMemo;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var int
     */
    public $modelType;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $rootCauseDesc;

    /**
     * @var string
     */
    public $rootCauseSolution;
    protected $_name = [
        'fcFunctionName'    => 'FcFunctionName',
        'fcHandler'         => 'FcHandler',
        'fcInitializer'     => 'FcInitializer',
        'fcRegionNo'        => 'FcRegionNo',
        'fcServiceName'     => 'FcServiceName',
        'modelDesc'         => 'ModelDesc',
        'modelId'           => 'ModelId',
        'modelLanguage'     => 'ModelLanguage',
        'modelMemo'         => 'ModelMemo',
        'modelName'         => 'ModelName',
        'modelType'         => 'ModelType',
        'operaUid'          => 'OperaUid',
        'rootCauseDesc'     => 'RootCauseDesc',
        'rootCauseSolution' => 'RootCauseSolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fcFunctionName) {
            $res['FcFunctionName'] = $this->fcFunctionName;
        }
        if (null !== $this->fcHandler) {
            $res['FcHandler'] = $this->fcHandler;
        }
        if (null !== $this->fcInitializer) {
            $res['FcInitializer'] = $this->fcInitializer;
        }
        if (null !== $this->fcRegionNo) {
            $res['FcRegionNo'] = $this->fcRegionNo;
        }
        if (null !== $this->fcServiceName) {
            $res['FcServiceName'] = $this->fcServiceName;
        }
        if (null !== $this->modelDesc) {
            $res['ModelDesc'] = $this->modelDesc;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelLanguage) {
            $res['ModelLanguage'] = $this->modelLanguage;
        }
        if (null !== $this->modelMemo) {
            $res['ModelMemo'] = $this->modelMemo;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->rootCauseDesc) {
            $res['RootCauseDesc'] = $this->rootCauseDesc;
        }
        if (null !== $this->rootCauseSolution) {
            $res['RootCauseSolution'] = $this->rootCauseSolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSceneModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FcFunctionName'])) {
            $model->fcFunctionName = $map['FcFunctionName'];
        }
        if (isset($map['FcHandler'])) {
            $model->fcHandler = $map['FcHandler'];
        }
        if (isset($map['FcInitializer'])) {
            $model->fcInitializer = $map['FcInitializer'];
        }
        if (isset($map['FcRegionNo'])) {
            $model->fcRegionNo = $map['FcRegionNo'];
        }
        if (isset($map['FcServiceName'])) {
            $model->fcServiceName = $map['FcServiceName'];
        }
        if (isset($map['ModelDesc'])) {
            $model->modelDesc = $map['ModelDesc'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelLanguage'])) {
            $model->modelLanguage = $map['ModelLanguage'];
        }
        if (isset($map['ModelMemo'])) {
            $model->modelMemo = $map['ModelMemo'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['RootCauseDesc'])) {
            $model->rootCauseDesc = $map['RootCauseDesc'];
        }
        if (isset($map['RootCauseSolution'])) {
            $model->rootCauseSolution = $map['RootCauseSolution'];
        }

        return $model;
    }
}
