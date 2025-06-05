<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data\dataConfig;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data\schemeList;

class data extends Model
{
    /**
     * @var int
     */
    public $asrTaskPriority;

    /**
     * @var int
     */
    public $assignType;

    /**
     * @var dataConfig
     */
    public $dataConfig;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $manualReview;

    /**
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
     * @var int[]
     */
    public $schemeIdList;

    /**
     * @var schemeList[]
     */
    public $schemeList;

    /**
     * @var int
     */
    public $schemeTaskConfigId;

    /**
     * @var string
     */
    public $sourceDataType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'asrTaskPriority' => 'AsrTaskPriority',
        'assignType' => 'AssignType',
        'dataConfig' => 'DataConfig',
        'id' => 'Id',
        'manualReview' => 'ManualReview',
        'modeCustomizationId' => 'ModeCustomizationId',
        'modelName' => 'ModelName',
        'name' => 'Name',
        'schemeIdList' => 'SchemeIdList',
        'schemeList' => 'SchemeList',
        'schemeTaskConfigId' => 'SchemeTaskConfigId',
        'sourceDataType' => 'SourceDataType',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->dataConfig) {
            $this->dataConfig->validate();
        }
        if (\is_array($this->schemeIdList)) {
            Model::validateArray($this->schemeIdList);
        }
        if (\is_array($this->schemeList)) {
            Model::validateArray($this->schemeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrTaskPriority) {
            $res['AsrTaskPriority'] = $this->asrTaskPriority;
        }

        if (null !== $this->assignType) {
            $res['AssignType'] = $this->assignType;
        }

        if (null !== $this->dataConfig) {
            $res['DataConfig'] = null !== $this->dataConfig ? $this->dataConfig->toArray($noStream) : $this->dataConfig;
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

        if (null !== $this->schemeIdList) {
            if (\is_array($this->schemeIdList)) {
                $res['SchemeIdList'] = [];
                $n1 = 0;
                foreach ($this->schemeIdList as $item1) {
                    $res['SchemeIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->schemeList) {
            if (\is_array($this->schemeList)) {
                $res['SchemeList'] = [];
                $n1 = 0;
                foreach ($this->schemeList as $item1) {
                    $res['SchemeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrTaskPriority'])) {
            $model->asrTaskPriority = $map['AsrTaskPriority'];
        }

        if (isset($map['AssignType'])) {
            $model->assignType = $map['AssignType'];
        }

        if (isset($map['DataConfig'])) {
            $model->dataConfig = dataConfig::fromMap($map['DataConfig']);
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

        if (isset($map['SchemeIdList'])) {
            if (!empty($map['SchemeIdList'])) {
                $model->schemeIdList = [];
                $n1 = 0;
                foreach ($map['SchemeIdList'] as $item1) {
                    $model->schemeIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SchemeList'])) {
            if (!empty($map['SchemeList'])) {
                $model->schemeList = [];
                $n1 = 0;
                foreach ($map['SchemeList'] as $item1) {
                    $model->schemeList[$n1++] = schemeList::fromMap($item1);
                }
            }
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

        return $model;
    }
}
