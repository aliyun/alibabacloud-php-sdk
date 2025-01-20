<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateNacosGrayConfigRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $dataId;
    /**
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
     * @var string
     */
    public $grayType;
    /**
     * @var string
     */
    public $group;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $namespaceId;
    /**
     * @var string
     */
    public $opType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $requestPars;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
