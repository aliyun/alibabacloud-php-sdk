<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\deviceVariables\outputThreshold;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\deviceVariables\variableVelocity;
use AlibabaCloud\Tea\Model;

class deviceVariables extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $dataDisplay;

    /**
     * @var string
     */
    public $defineId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayType;

    /**
     * @var string
     */
    public $expressionTitle;

    /**
     * @var bool
     */
    public $favoriteFlag;

    /**
     * @var string
     */
    public $fieldDetail;

    /**
     * @var int
     */
    public $fieldRank;

    /**
     * @var string
     */
    public $fieldSource;

    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $inputFieldType;

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
    public $name;

    /**
     * @var string
     */
    public $outlier;

    /**
     * @var outputThreshold
     */
    public $outputThreshold;

    /**
     * @var string
     */
    public $parentName;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var variableVelocity
     */
    public $variableVelocity;

    /**
     * @var string
     */
    public $xLabel;

    /**
     * @var string
     */
    public $yLabel;
    protected $_name = [
        'code'             => 'code',
        'dataDisplay'      => 'dataDisplay',
        'defineId'         => 'defineId',
        'description'      => 'description',
        'displayType'      => 'displayType',
        'expressionTitle'  => 'expressionTitle',
        'favoriteFlag'     => 'favoriteFlag',
        'fieldDetail'      => 'fieldDetail',
        'fieldRank'        => 'fieldRank',
        'fieldSource'      => 'fieldSource',
        'fieldType'        => 'fieldType',
        'id'               => 'id',
        'inputFieldType'   => 'inputFieldType',
        'inputRequired'    => 'inputRequired',
        'inputs'           => 'inputs',
        'name'             => 'name',
        'outlier'          => 'outlier',
        'outputThreshold'  => 'outputThreshold',
        'parentName'       => 'parentName',
        'sourceType'       => 'sourceType',
        'title'            => 'title',
        'type'             => 'type',
        'variableVelocity' => 'variableVelocity',
        'xLabel'           => 'xLabel',
        'yLabel'           => 'yLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->dataDisplay) {
            $res['dataDisplay'] = $this->dataDisplay;
        }
        if (null !== $this->defineId) {
            $res['defineId'] = $this->defineId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayType) {
            $res['displayType'] = $this->displayType;
        }
        if (null !== $this->expressionTitle) {
            $res['expressionTitle'] = $this->expressionTitle;
        }
        if (null !== $this->favoriteFlag) {
            $res['favoriteFlag'] = $this->favoriteFlag;
        }
        if (null !== $this->fieldDetail) {
            $res['fieldDetail'] = $this->fieldDetail;
        }
        if (null !== $this->fieldRank) {
            $res['fieldRank'] = $this->fieldRank;
        }
        if (null !== $this->fieldSource) {
            $res['fieldSource'] = $this->fieldSource;
        }
        if (null !== $this->fieldType) {
            $res['fieldType'] = $this->fieldType;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->inputFieldType) {
            $res['inputFieldType'] = $this->inputFieldType;
        }
        if (null !== $this->inputRequired) {
            $res['inputRequired'] = $this->inputRequired;
        }
        if (null !== $this->inputs) {
            $res['inputs'] = $this->inputs;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->outlier) {
            $res['outlier'] = $this->outlier;
        }
        if (null !== $this->outputThreshold) {
            $res['outputThreshold'] = null !== $this->outputThreshold ? $this->outputThreshold->toMap() : null;
        }
        if (null !== $this->parentName) {
            $res['parentName'] = $this->parentName;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->variableVelocity) {
            $res['variableVelocity'] = null !== $this->variableVelocity ? $this->variableVelocity->toMap() : null;
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
     * @return deviceVariables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['dataDisplay'])) {
            $model->dataDisplay = $map['dataDisplay'];
        }
        if (isset($map['defineId'])) {
            $model->defineId = $map['defineId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayType'])) {
            $model->displayType = $map['displayType'];
        }
        if (isset($map['expressionTitle'])) {
            $model->expressionTitle = $map['expressionTitle'];
        }
        if (isset($map['favoriteFlag'])) {
            $model->favoriteFlag = $map['favoriteFlag'];
        }
        if (isset($map['fieldDetail'])) {
            $model->fieldDetail = $map['fieldDetail'];
        }
        if (isset($map['fieldRank'])) {
            $model->fieldRank = $map['fieldRank'];
        }
        if (isset($map['fieldSource'])) {
            $model->fieldSource = $map['fieldSource'];
        }
        if (isset($map['fieldType'])) {
            $model->fieldType = $map['fieldType'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['inputFieldType'])) {
            $model->inputFieldType = $map['inputFieldType'];
        }
        if (isset($map['inputRequired'])) {
            $model->inputRequired = $map['inputRequired'];
        }
        if (isset($map['inputs'])) {
            $model->inputs = $map['inputs'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['outlier'])) {
            $model->outlier = $map['outlier'];
        }
        if (isset($map['outputThreshold'])) {
            $model->outputThreshold = outputThreshold::fromMap($map['outputThreshold']);
        }
        if (isset($map['parentName'])) {
            $model->parentName = $map['parentName'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['variableVelocity'])) {
            $model->variableVelocity = variableVelocity::fromMap($map['variableVelocity']);
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
