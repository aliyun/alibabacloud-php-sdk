<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class UpdateCdrsMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $deviceOperateType;

    /**
     * @var string
     */
    public $deviceList;

    /**
     * @var string
     */
    public $picOperateType;

    /**
     * @var string
     */
    public $picList;

    /**
     * @var string
     */
    public $attributeOperateType;

    /**
     * @var string
     */
    public $attributeName;

    /**
     * @var string
     */
    public $attributeValueList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ruleExpression;

    /**
     * @var string
     */
    public $algorithmVendor;

    /**
     * @var string
     */
    public $notifierType;

    /**
     * @var string
     */
    public $notifierUrl;

    /**
     * @var string
     */
    public $notifierAppSecret;

    /**
     * @var int
     */
    public $notifierTimeOut;

    /**
     * @var string
     */
    public $notifierExtendValues;
    protected $_name = [
        'corpId'               => 'CorpId',
        'taskId'               => 'TaskId',
        'ruleName'             => 'RuleName',
        'deviceOperateType'    => 'DeviceOperateType',
        'deviceList'           => 'DeviceList',
        'picOperateType'       => 'PicOperateType',
        'picList'              => 'PicList',
        'attributeOperateType' => 'AttributeOperateType',
        'attributeName'        => 'AttributeName',
        'attributeValueList'   => 'AttributeValueList',
        'description'          => 'Description',
        'ruleExpression'       => 'RuleExpression',
        'algorithmVendor'      => 'AlgorithmVendor',
        'notifierType'         => 'NotifierType',
        'notifierUrl'          => 'NotifierUrl',
        'notifierAppSecret'    => 'NotifierAppSecret',
        'notifierTimeOut'      => 'NotifierTimeOut',
        'notifierExtendValues' => 'NotifierExtendValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->deviceOperateType) {
            $res['DeviceOperateType'] = $this->deviceOperateType;
        }
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
        }
        if (null !== $this->picOperateType) {
            $res['PicOperateType'] = $this->picOperateType;
        }
        if (null !== $this->picList) {
            $res['PicList'] = $this->picList;
        }
        if (null !== $this->attributeOperateType) {
            $res['AttributeOperateType'] = $this->attributeOperateType;
        }
        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }
        if (null !== $this->attributeValueList) {
            $res['AttributeValueList'] = $this->attributeValueList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ruleExpression) {
            $res['RuleExpression'] = $this->ruleExpression;
        }
        if (null !== $this->algorithmVendor) {
            $res['AlgorithmVendor'] = $this->algorithmVendor;
        }
        if (null !== $this->notifierType) {
            $res['NotifierType'] = $this->notifierType;
        }
        if (null !== $this->notifierUrl) {
            $res['NotifierUrl'] = $this->notifierUrl;
        }
        if (null !== $this->notifierAppSecret) {
            $res['NotifierAppSecret'] = $this->notifierAppSecret;
        }
        if (null !== $this->notifierTimeOut) {
            $res['NotifierTimeOut'] = $this->notifierTimeOut;
        }
        if (null !== $this->notifierExtendValues) {
            $res['NotifierExtendValues'] = $this->notifierExtendValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCdrsMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['DeviceOperateType'])) {
            $model->deviceOperateType = $map['DeviceOperateType'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceList = $map['DeviceList'];
        }
        if (isset($map['PicOperateType'])) {
            $model->picOperateType = $map['PicOperateType'];
        }
        if (isset($map['PicList'])) {
            $model->picList = $map['PicList'];
        }
        if (isset($map['AttributeOperateType'])) {
            $model->attributeOperateType = $map['AttributeOperateType'];
        }
        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }
        if (isset($map['AttributeValueList'])) {
            $model->attributeValueList = $map['AttributeValueList'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RuleExpression'])) {
            $model->ruleExpression = $map['RuleExpression'];
        }
        if (isset($map['AlgorithmVendor'])) {
            $model->algorithmVendor = $map['AlgorithmVendor'];
        }
        if (isset($map['NotifierType'])) {
            $model->notifierType = $map['NotifierType'];
        }
        if (isset($map['NotifierUrl'])) {
            $model->notifierUrl = $map['NotifierUrl'];
        }
        if (isset($map['NotifierAppSecret'])) {
            $model->notifierAppSecret = $map['NotifierAppSecret'];
        }
        if (isset($map['NotifierTimeOut'])) {
            $model->notifierTimeOut = $map['NotifierTimeOut'];
        }
        if (isset($map['NotifierExtendValues'])) {
            $model->notifierExtendValues = $map['NotifierExtendValues'];
        }

        return $model;
    }
}
