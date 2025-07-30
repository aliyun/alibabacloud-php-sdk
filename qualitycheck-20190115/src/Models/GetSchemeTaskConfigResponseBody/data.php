<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data\dataConfig;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data\schemeList;
use AlibabaCloud\Tea\Model;

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
     * @example 3
     *
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
     * @example test
     *
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
     * @example 123
     *
     * @var int
     */
    public $schemeTaskConfigId;

    /**
     * @example 1
     *
     * @var string
     */
    public $sourceDataType;

    /**
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrTaskPriority) {
            $res['AsrTaskPriority'] = $this->asrTaskPriority;
        }
        if (null !== $this->assignType) {
            $res['AssignType'] = $this->assignType;
        }
        if (null !== $this->dataConfig) {
            $res['DataConfig'] = null !== $this->dataConfig ? $this->dataConfig->toMap() : null;
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
            $res['SchemeIdList'] = $this->schemeIdList;
        }
        if (null !== $this->schemeList) {
            $res['SchemeList'] = [];
            if (null !== $this->schemeList && \is_array($this->schemeList)) {
                $n = 0;
                foreach ($this->schemeList as $item) {
                    $res['SchemeList'][$n++] = null !== $item ? $item->toMap() : $item;
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
                $model->schemeIdList = $map['SchemeIdList'];
            }
        }
        if (isset($map['SchemeList'])) {
            if (!empty($map['SchemeList'])) {
                $model->schemeList = [];
                $n = 0;
                foreach ($map['SchemeList'] as $item) {
                    $model->schemeList[$n++] = null !== $item ? schemeList::fromMap($item) : $item;
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
