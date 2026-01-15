<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeUserModelListResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $customerModuleName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $featureTemplate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $innerDefineStatus;

    /**
     * @var string
     */
    public $innerModuleName;

    /**
     * @var bool
     */
    public $isAllowIterate;

    /**
     * @var bool
     */
    public $isAllowRollback;

    /**
     * @var int
     */
    public $iterationVersion;

    /**
     * @var int
     */
    public $rootModuleId;
    protected $_name = [
        'authType' => 'AuthType',
        'customerModuleName' => 'CustomerModuleName',
        'description' => 'Description',
        'featureTemplate' => 'FeatureTemplate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'innerDefineStatus' => 'InnerDefineStatus',
        'innerModuleName' => 'InnerModuleName',
        'isAllowIterate' => 'IsAllowIterate',
        'isAllowRollback' => 'IsAllowRollback',
        'iterationVersion' => 'IterationVersion',
        'rootModuleId' => 'RootModuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->customerModuleName) {
            $res['CustomerModuleName'] = $this->customerModuleName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->featureTemplate) {
            $res['FeatureTemplate'] = $this->featureTemplate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->innerDefineStatus) {
            $res['InnerDefineStatus'] = $this->innerDefineStatus;
        }

        if (null !== $this->innerModuleName) {
            $res['InnerModuleName'] = $this->innerModuleName;
        }

        if (null !== $this->isAllowIterate) {
            $res['IsAllowIterate'] = $this->isAllowIterate;
        }

        if (null !== $this->isAllowRollback) {
            $res['IsAllowRollback'] = $this->isAllowRollback;
        }

        if (null !== $this->iterationVersion) {
            $res['IterationVersion'] = $this->iterationVersion;
        }

        if (null !== $this->rootModuleId) {
            $res['RootModuleId'] = $this->rootModuleId;
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
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['CustomerModuleName'])) {
            $model->customerModuleName = $map['CustomerModuleName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FeatureTemplate'])) {
            $model->featureTemplate = $map['FeatureTemplate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InnerDefineStatus'])) {
            $model->innerDefineStatus = $map['InnerDefineStatus'];
        }

        if (isset($map['InnerModuleName'])) {
            $model->innerModuleName = $map['InnerModuleName'];
        }

        if (isset($map['IsAllowIterate'])) {
            $model->isAllowIterate = $map['IsAllowIterate'];
        }

        if (isset($map['IsAllowRollback'])) {
            $model->isAllowRollback = $map['IsAllowRollback'];
        }

        if (isset($map['IterationVersion'])) {
            $model->iterationVersion = $map['IterationVersion'];
        }

        if (isset($map['RootModuleId'])) {
            $model->rootModuleId = $map['RootModuleId'];
        }

        return $model;
    }
}
