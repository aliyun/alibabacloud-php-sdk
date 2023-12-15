<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class UpdateCdrsMonitorRequest extends Model
{
    /**
     * @example damo
     *
     * @var string
     */
    public $algorithmVendor;

    /**
     * @example PlateNo
     *
     * @var string
     */
    public $attributeName;

    /**
     * @example ADD
     *
     * @var string
     */
    public $attributeOperateType;

    /**
     * @var string
     */
    public $attributeValueList;

    /**
     * @example 10001
     *
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 33011012011327990001,33011012011327990002
     *
     * @var string
     */
    public $deviceList;

    /**
     * @example ADD
     *
     * @var string
     */
    public $deviceOperateType;

    /**
     * @example mySecret
     *
     * @var string
     */
    public $notifierAppSecret;

    /**
     * @example {\"userId\": \"1\" }
     *
     * @var string
     */
    public $notifierExtendValues;

    /**
     * @example 2000
     *
     * @var int
     */
    public $notifierTimeOut;

    /**
     * @example webhook
     *
     * @var string
     */
    public $notifierType;

    /**
     * @example http://oapi.dingtalk.com/robot/send
     *
     * @var string
     */
    public $notifierUrl;

    /**
     * @example http://xxx/0/4ed87f4f04c14a259f3da12ff46b9125.jpg,http://xxx/0/4ed87f4f04c14a259f3da12ff46b9126.jpg
     *
     * @var string
     */
    public $picList;

    /**
     * @example ADD
     *
     * @var string
     */
    public $picOperateType;

    /**
     * @var string
     */
    public $ruleExpression;

    /**
     * @example un_mask_match
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example d5b65bb43c5242d89b199a360211930c
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'algorithmVendor'      => 'AlgorithmVendor',
        'attributeName'        => 'AttributeName',
        'attributeOperateType' => 'AttributeOperateType',
        'attributeValueList'   => 'AttributeValueList',
        'corpId'               => 'CorpId',
        'description'          => 'Description',
        'deviceList'           => 'DeviceList',
        'deviceOperateType'    => 'DeviceOperateType',
        'notifierAppSecret'    => 'NotifierAppSecret',
        'notifierExtendValues' => 'NotifierExtendValues',
        'notifierTimeOut'      => 'NotifierTimeOut',
        'notifierType'         => 'NotifierType',
        'notifierUrl'          => 'NotifierUrl',
        'picList'              => 'PicList',
        'picOperateType'       => 'PicOperateType',
        'ruleExpression'       => 'RuleExpression',
        'ruleName'             => 'RuleName',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmVendor) {
            $res['AlgorithmVendor'] = $this->algorithmVendor;
        }
        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }
        if (null !== $this->attributeOperateType) {
            $res['AttributeOperateType'] = $this->attributeOperateType;
        }
        if (null !== $this->attributeValueList) {
            $res['AttributeValueList'] = $this->attributeValueList;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
        }
        if (null !== $this->deviceOperateType) {
            $res['DeviceOperateType'] = $this->deviceOperateType;
        }
        if (null !== $this->notifierAppSecret) {
            $res['NotifierAppSecret'] = $this->notifierAppSecret;
        }
        if (null !== $this->notifierExtendValues) {
            $res['NotifierExtendValues'] = $this->notifierExtendValues;
        }
        if (null !== $this->notifierTimeOut) {
            $res['NotifierTimeOut'] = $this->notifierTimeOut;
        }
        if (null !== $this->notifierType) {
            $res['NotifierType'] = $this->notifierType;
        }
        if (null !== $this->notifierUrl) {
            $res['NotifierUrl'] = $this->notifierUrl;
        }
        if (null !== $this->picList) {
            $res['PicList'] = $this->picList;
        }
        if (null !== $this->picOperateType) {
            $res['PicOperateType'] = $this->picOperateType;
        }
        if (null !== $this->ruleExpression) {
            $res['RuleExpression'] = $this->ruleExpression;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AlgorithmVendor'])) {
            $model->algorithmVendor = $map['AlgorithmVendor'];
        }
        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }
        if (isset($map['AttributeOperateType'])) {
            $model->attributeOperateType = $map['AttributeOperateType'];
        }
        if (isset($map['AttributeValueList'])) {
            $model->attributeValueList = $map['AttributeValueList'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceList = $map['DeviceList'];
        }
        if (isset($map['DeviceOperateType'])) {
            $model->deviceOperateType = $map['DeviceOperateType'];
        }
        if (isset($map['NotifierAppSecret'])) {
            $model->notifierAppSecret = $map['NotifierAppSecret'];
        }
        if (isset($map['NotifierExtendValues'])) {
            $model->notifierExtendValues = $map['NotifierExtendValues'];
        }
        if (isset($map['NotifierTimeOut'])) {
            $model->notifierTimeOut = $map['NotifierTimeOut'];
        }
        if (isset($map['NotifierType'])) {
            $model->notifierType = $map['NotifierType'];
        }
        if (isset($map['NotifierUrl'])) {
            $model->notifierUrl = $map['NotifierUrl'];
        }
        if (isset($map['PicList'])) {
            $model->picList = $map['PicList'];
        }
        if (isset($map['PicOperateType'])) {
            $model->picOperateType = $map['PicOperateType'];
        }
        if (isset($map['RuleExpression'])) {
            $model->ruleExpression = $map['RuleExpression'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
