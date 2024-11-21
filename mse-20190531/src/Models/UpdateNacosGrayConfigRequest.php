<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateNacosGrayConfigRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @example asdf
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $dataId;

    /**
     * @example key=value1,value2
     *
     * @var string
     */
    public $grayRule;

    /**
     * @var string
     */
    public $grayRuleName;

    /**
     * @var int
     */
    public $grayRulePriority;

    /**
     * @description This parameter is required.
     *
     * @example Tags
     *
     * @var string
     */
    public $grayType;

    /**
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $group;

    /**
     * @description This parameter is required.
     *
     * @example mse_prepaid_public_cn-st2212****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 6cf708a5-****-89f2-3ba62c5ee9ba
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $opType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example {}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @example true
     *
     * @var bool
     */
    public $stopGray;
    protected $_name = [
        'acceptLanguage'   => 'AcceptLanguage',
        'appName'          => 'AppName',
        'content'          => 'Content',
        'dataId'           => 'DataId',
        'grayRule'         => 'GrayRule',
        'grayRuleName'     => 'GrayRuleName',
        'grayRulePriority' => 'GrayRulePriority',
        'grayType'         => 'GrayType',
        'group'            => 'Group',
        'instanceId'       => 'InstanceId',
        'namespaceId'      => 'NamespaceId',
        'opType'           => 'OpType',
        'regionId'         => 'RegionId',
        'requestPars'      => 'RequestPars',
        'stopGray'         => 'StopGray',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->grayRule) {
            $res['GrayRule'] = $this->grayRule;
        }
        if (null !== $this->grayRuleName) {
            $res['GrayRuleName'] = $this->grayRuleName;
        }
        if (null !== $this->grayRulePriority) {
            $res['GrayRulePriority'] = $this->grayRulePriority;
        }
        if (null !== $this->grayType) {
            $res['GrayType'] = $this->grayType;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->stopGray) {
            $res['StopGray'] = $this->stopGray;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNacosGrayConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['GrayRule'])) {
            $model->grayRule = $map['GrayRule'];
        }
        if (isset($map['GrayRuleName'])) {
            $model->grayRuleName = $map['GrayRuleName'];
        }
        if (isset($map['GrayRulePriority'])) {
            $model->grayRulePriority = $map['GrayRulePriority'];
        }
        if (isset($map['GrayType'])) {
            $model->grayType = $map['GrayType'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['StopGray'])) {
            $model->stopGray = $map['StopGray'];
        }

        return $model;
    }
}
