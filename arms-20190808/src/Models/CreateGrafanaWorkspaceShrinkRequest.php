<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateGrafanaWorkspaceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accountNumber;

    /**
     * @description The language. Default value: zh. Valid values:
     *
     *   zh
     *   en
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $customAccountNumber;

    /**
     * @description The description of the workspace
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $duration;

    /**
     * @description This parameter is required.
     *
     * @example 10.0.x
     *
     * @var string
     */
    public $grafanaVersion;

    /**
     * @description The edition.
     *
     **Valid values:**
     *
     *   standard: `Beta Edition or Standard Edition`
     *   personal_edition: Developer Edition
     *   experts_edition: Pro Edition
     *   advanced_edition: Advanced Edition
     *
     * This parameter is required.
     * @example experts_edition
     *
     * @var string
     */
    public $grafanaWorkspaceEdition;

    /**
     * @description The name of the Grafana workspace.
     *
     * This parameter is required.
     * @example testgrafana
     *
     * @var string
     */
    public $grafanaWorkspaceName;

    /**
     * @description The password of the workspace. The password must be 8 to 30 characters in length. It must include at least three of the following characters types: uppercase letter, lowercase letter, digit, and special character. Special characters include () \\" ~ ! @ # $ % ^ & \\* - _ + =.
     *
     * @example Test123456!
     *
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The list of tags.
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'accountNumber'           => 'AccountNumber',
        'aliyunLang'              => 'AliyunLang',
        'autoRenew'               => 'AutoRenew',
        'customAccountNumber'     => 'CustomAccountNumber',
        'description'             => 'Description',
        'duration'                => 'Duration',
        'grafanaVersion'          => 'GrafanaVersion',
        'grafanaWorkspaceEdition' => 'GrafanaWorkspaceEdition',
        'grafanaWorkspaceName'    => 'GrafanaWorkspaceName',
        'password'                => 'Password',
        'pricingCycle'            => 'PricingCycle',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'tagsShrink'              => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNumber) {
            $res['AccountNumber'] = $this->accountNumber;
        }
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->customAccountNumber) {
            $res['CustomAccountNumber'] = $this->customAccountNumber;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->grafanaVersion) {
            $res['GrafanaVersion'] = $this->grafanaVersion;
        }
        if (null !== $this->grafanaWorkspaceEdition) {
            $res['GrafanaWorkspaceEdition'] = $this->grafanaWorkspaceEdition;
        }
        if (null !== $this->grafanaWorkspaceName) {
            $res['GrafanaWorkspaceName'] = $this->grafanaWorkspaceName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGrafanaWorkspaceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNumber'])) {
            $model->accountNumber = $map['AccountNumber'];
        }
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['CustomAccountNumber'])) {
            $model->customAccountNumber = $map['CustomAccountNumber'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['GrafanaVersion'])) {
            $model->grafanaVersion = $map['GrafanaVersion'];
        }
        if (isset($map['GrafanaWorkspaceEdition'])) {
            $model->grafanaWorkspaceEdition = $map['GrafanaWorkspaceEdition'];
        }
        if (isset($map['GrafanaWorkspaceName'])) {
            $model->grafanaWorkspaceName = $map['GrafanaWorkspaceName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
