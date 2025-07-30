<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\schemeIdList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\schemeList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $asrTaskPriority;

    /**
     * @var int
     */
    public $asrVersion;

    /**
     * @example 0
     *
     * @var int
     */
    public $assignType;

    /**
     * @example 1650418039000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $createUser;

    /**
     * @var dataConfig
     */
    public $dataConfig;

    /**
     * @example 100
     *
     * @var float
     */
    public $finishRate;

    /**
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @example 0
     *
     * @var int
     */
    public $manualReview;

    /**
     * @example cdae396590b*****ec40f3476e274fc
     *
     * @var string
     */
    public $modeCustomizationId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 0
     *
     * @var int
     */
    public $numberExecuting;

    /**
     * @example 0
     *
     * @var int
     */
    public $numberFail;

    /**
     * @example 1000
     *
     * @var int
     */
    public $numberSuccess;

    /**
     * @example 1000
     *
     * @var int
     */
    public $numberSum;

    /**
     * @var schemeIdList
     */
    public $schemeIdList;

    /**
     * @var schemeList
     */
    public $schemeList;

    /**
     * @example 123
     *
     * @var int
     */
    public $schemeTaskConfigId;

    /**
     * @example 2
     *
     * @var int
     */
    public $sourceDataType;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @example 1650418039000
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $updateUser;

    /**
     * @example 1
     *
     * @var string
     */
    public $userGroup;

    /**
     * @example 9f90b3efa2****0a49acec226eafc17
     *
     * @var string
     */
    public $vocabId;

    /**
     * @var string
     */
    public $vocabName;
    protected $_name = [
        'asrTaskPriority' => 'AsrTaskPriority',
        'asrVersion' => 'AsrVersion',
        'assignType' => 'AssignType',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'dataConfig' => 'DataConfig',
        'finishRate' => 'FinishRate',
        'id' => 'Id',
        'manualReview' => 'ManualReview',
        'modeCustomizationId' => 'ModeCustomizationId',
        'modelName' => 'ModelName',
        'name' => 'Name',
        'numberExecuting' => 'NumberExecuting',
        'numberFail' => 'NumberFail',
        'numberSuccess' => 'NumberSuccess',
        'numberSum' => 'NumberSum',
        'schemeIdList' => 'SchemeIdList',
        'schemeList' => 'SchemeList',
        'schemeTaskConfigId' => 'SchemeTaskConfigId',
        'sourceDataType' => 'SourceDataType',
        'status' => 'Status',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
        'updateUser' => 'UpdateUser',
        'userGroup' => 'UserGroup',
        'vocabId' => 'VocabId',
        'vocabName' => 'VocabName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrTaskPriority) {
            $res['AsrTaskPriority'] = $this->asrTaskPriority;
        }
        if (null !== $this->asrVersion) {
            $res['AsrVersion'] = $this->asrVersion;
        }
        if (null !== $this->assignType) {
            $res['AssignType'] = $this->assignType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->dataConfig) {
            $res['DataConfig'] = null !== $this->dataConfig ? $this->dataConfig->toMap() : null;
        }
        if (null !== $this->finishRate) {
            $res['FinishRate'] = $this->finishRate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->manualReview) {
            $res['ManualReview'] = $this->manualReview;
        }
        if (null !== $this->modeCustomizationId) {
            $res['ModeCustomizationId'] = $this->modeCustomizationId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->numberExecuting) {
            $res['NumberExecuting'] = $this->numberExecuting;
        }
        if (null !== $this->numberFail) {
            $res['NumberFail'] = $this->numberFail;
        }
        if (null !== $this->numberSuccess) {
            $res['NumberSuccess'] = $this->numberSuccess;
        }
        if (null !== $this->numberSum) {
            $res['NumberSum'] = $this->numberSum;
        }
        if (null !== $this->schemeIdList) {
            $res['SchemeIdList'] = null !== $this->schemeIdList ? $this->schemeIdList->toMap() : null;
        }
        if (null !== $this->schemeList) {
            $res['SchemeList'] = null !== $this->schemeList ? $this->schemeList->toMap() : null;
        }
        if (null !== $this->schemeTaskConfigId) {
            $res['SchemeTaskConfigId'] = $this->schemeTaskConfigId;
        }
        if (null !== $this->sourceDataType) {
            $res['SourceDataType'] = $this->sourceDataType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateUser) {
            $res['UpdateUser'] = $this->updateUser;
        }
        if (null !== $this->userGroup) {
            $res['UserGroup'] = $this->userGroup;
        }
        if (null !== $this->vocabId) {
            $res['VocabId'] = $this->vocabId;
        }
        if (null !== $this->vocabName) {
            $res['VocabName'] = $this->vocabName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrTaskPriority'])) {
            $model->asrTaskPriority = $map['AsrTaskPriority'];
        }
        if (isset($map['AsrVersion'])) {
            $model->asrVersion = $map['AsrVersion'];
        }
        if (isset($map['AssignType'])) {
            $model->assignType = $map['AssignType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['DataConfig'])) {
            $model->dataConfig = dataConfig::fromMap($map['DataConfig']);
        }
        if (isset($map['FinishRate'])) {
            $model->finishRate = $map['FinishRate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ManualReview'])) {
            $model->manualReview = $map['ManualReview'];
        }
        if (isset($map['ModeCustomizationId'])) {
            $model->modeCustomizationId = $map['ModeCustomizationId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NumberExecuting'])) {
            $model->numberExecuting = $map['NumberExecuting'];
        }
        if (isset($map['NumberFail'])) {
            $model->numberFail = $map['NumberFail'];
        }
        if (isset($map['NumberSuccess'])) {
            $model->numberSuccess = $map['NumberSuccess'];
        }
        if (isset($map['NumberSum'])) {
            $model->numberSum = $map['NumberSum'];
        }
        if (isset($map['SchemeIdList'])) {
            $model->schemeIdList = schemeIdList::fromMap($map['SchemeIdList']);
        }
        if (isset($map['SchemeList'])) {
            $model->schemeList = schemeList::fromMap($map['SchemeList']);
        }
        if (isset($map['SchemeTaskConfigId'])) {
            $model->schemeTaskConfigId = $map['SchemeTaskConfigId'];
        }
        if (isset($map['SourceDataType'])) {
            $model->sourceDataType = $map['SourceDataType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateUser'])) {
            $model->updateUser = $map['UpdateUser'];
        }
        if (isset($map['UserGroup'])) {
            $model->userGroup = $map['UserGroup'];
        }
        if (isset($map['VocabId'])) {
            $model->vocabId = $map['VocabId'];
        }
        if (isset($map['VocabName'])) {
            $model->vocabName = $map['VocabName'];
        }

        return $model;
    }
}
