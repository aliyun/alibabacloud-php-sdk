<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesDetailResponseBody;

use AlibabaCloud\Tea\Model;

class userStatus extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var int
     */
    public $configContentType;

    /**
     * @var string
     */
    public $dealSuggestion;

    /**
     * @var int
     */
    public $eventHitCount;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @var int
     */
    public $accessCount;

    /**
     * @var string
     */
    public $configDescription;

    /**
     * @var string
     */
    public $riskName;

    /**
     * @var string
     */
    public $descEvent;

    /**
     * @var string
     */
    public $riskEvent;

    /**
     * @var string
     */
    public $parentTypeName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $descModel;

    /**
     * @var string
     */
    public $configCode;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $parentTypeId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $adaptedProduct;
    protected $_name = [
        'status'            => 'Status',
        'riskLevel'         => 'RiskLevel',
        'configContentType' => 'ConfigContentType',
        'dealSuggestion'    => 'DealSuggestion',
        'eventHitCount'     => 'EventHitCount',
        'configValue'       => 'ConfigValue',
        'accessCount'       => 'AccessCount',
        'configDescription' => 'ConfigDescription',
        'riskName'          => 'RiskName',
        'descEvent'         => 'DescEvent',
        'riskEvent'         => 'RiskEvent',
        'parentTypeName'    => 'ParentTypeName',
        'description'       => 'Description',
        'descModel'         => 'DescModel',
        'configCode'        => 'ConfigCode',
        'code'              => 'Code',
        'parentTypeId'      => 'ParentTypeId',
        'name'              => 'Name',
        'adaptedProduct'    => 'AdaptedProduct',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->configContentType) {
            $res['ConfigContentType'] = $this->configContentType;
        }
        if (null !== $this->dealSuggestion) {
            $res['DealSuggestion'] = $this->dealSuggestion;
        }
        if (null !== $this->eventHitCount) {
            $res['EventHitCount'] = $this->eventHitCount;
        }
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }
        if (null !== $this->accessCount) {
            $res['AccessCount'] = $this->accessCount;
        }
        if (null !== $this->configDescription) {
            $res['ConfigDescription'] = $this->configDescription;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }
        if (null !== $this->descEvent) {
            $res['DescEvent'] = $this->descEvent;
        }
        if (null !== $this->riskEvent) {
            $res['RiskEvent'] = $this->riskEvent;
        }
        if (null !== $this->parentTypeName) {
            $res['ParentTypeName'] = $this->parentTypeName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->descModel) {
            $res['DescModel'] = $this->descModel;
        }
        if (null !== $this->configCode) {
            $res['ConfigCode'] = $this->configCode;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->parentTypeId) {
            $res['ParentTypeId'] = $this->parentTypeId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->adaptedProduct) {
            $res['AdaptedProduct'] = $this->adaptedProduct;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['ConfigContentType'])) {
            $model->configContentType = $map['ConfigContentType'];
        }
        if (isset($map['DealSuggestion'])) {
            $model->dealSuggestion = $map['DealSuggestion'];
        }
        if (isset($map['EventHitCount'])) {
            $model->eventHitCount = $map['EventHitCount'];
        }
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['AccessCount'])) {
            $model->accessCount = $map['AccessCount'];
        }
        if (isset($map['ConfigDescription'])) {
            $model->configDescription = $map['ConfigDescription'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }
        if (isset($map['DescEvent'])) {
            $model->descEvent = $map['DescEvent'];
        }
        if (isset($map['RiskEvent'])) {
            $model->riskEvent = $map['RiskEvent'];
        }
        if (isset($map['ParentTypeName'])) {
            $model->parentTypeName = $map['ParentTypeName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DescModel'])) {
            $model->descModel = $map['DescModel'];
        }
        if (isset($map['ConfigCode'])) {
            $model->configCode = $map['ConfigCode'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ParentTypeId'])) {
            $model->parentTypeId = $map['ParentTypeId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AdaptedProduct'])) {
            $model->adaptedProduct = $map['AdaptedProduct'];
        }

        return $model;
    }
}
