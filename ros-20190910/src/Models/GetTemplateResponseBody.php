<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateResponseBody\permissions;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetTemplateResponseBody extends Model
{
    /**
     * @description The ID of the change set. This parameter is returned only if you specify ChangeSetId.
     *
     * @example e85abe0c-6528-43fb-ae93-fdf8de22****
     *
     * @var string
     */
    public $changeSetId;

    /**
     * @description The time when the template was created. This parameter is returned only if you specify TemplateId.
     *
     * > - If you do not specify TemplateVersion, the creation time of the template whose version is the default version is returned.
     * @example 2020-11-18T08:49:26
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the template. This parameter is returned only if you specify TemplateId.
     *
     * @example ROS template for create ECS instance.
     *
     * @var string
     */
    public $description;

    /**
     * @description The description of the web UI in the ROS console.
     *
     * @example {}
     *
     * @var string
     */
    public $interface;

    /**
     * @description The ID of the Alibaba Cloud account to which the template belongs. This parameter is returned only if you specify TemplateId.
     *
     * @example 151266687691****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description Details of the sharing status of the template. This parameter is returned only if you specify TemplateId and set IncludePermission to Enabled.
     *
     * > - If TemplateVersion is specified and takes effect, the details of the sharing status of the template whose version is specified by TemplateVersion is returned.
     * @var permissions[]
     */
    public $permissions;

    /**
     * @description The region ID of the stack or stack group that uses the template. This parameter is returned only if you specify StackId, ChangeSetId, or StackGroupName.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The sharing type of the template. This parameter is returned only if you specify TemplateId.
     *
     * Valid values:
     *
     *   Private: The template belongs to the template owner.
     *   Shared: The template is shared by other users.
     *
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The name of the stack group. This parameter is returned only if you specify StackGroupName.
     *
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The ID of the stack. This parameter is returned only if you specify StackId.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The tags of the template.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the template. This parameter is returned only if you specify TemplateId.
     *
     * @example acs:ros:*:151266687691****:template/a52f81be-496f-4e1c-a286-8852ab54****
     *
     * @var string
     */
    public $templateARN;

    /**
     * @description The content of the template.
     *
     * @example {"ROSTemplateFormatVersion": "2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description The ID of the template. This parameter is returned only if you specify TemplateId.
     *
     * If the template is a shared template, the value of this parameter is the same as the value of TemplateARN.
     * @example a52f81be-496f-4e1c-a286-8852ab54****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the template. This parameter is returned only if you specify TemplateId.
     *
     * > -  If you not specify TemplateVersion, the name of the template whose version is the default version is returned.
     * @example MyTemplate
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The version of the template. This parameter is returned only if you specify TemplateId.\\
     * If the template is a shared template, this parameter is returned only if you set VersionOption to AllVersions.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The time when the template was last updated. This parameter is returned only if you specify TemplateId.
     *
     * > - If you do not specify TemplateVersion, the last update time of the template whose version is the default version is returned.
     * @example 2020-12-07T06:11:48
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'changeSetId'     => 'ChangeSetId',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'interface'       => 'Interface',
        'ownerId'         => 'OwnerId',
        'permissions'     => 'Permissions',
        'regionId'        => 'RegionId',
        'requestId'       => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'shareType'       => 'ShareType',
        'stackGroupName'  => 'StackGroupName',
        'stackId'         => 'StackId',
        'tags'            => 'Tags',
        'templateARN'     => 'TemplateARN',
        'templateBody'    => 'TemplateBody',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'templateVersion' => 'TemplateVersion',
        'updateTime'      => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->interface) {
            $res['Interface'] = $this->interface;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->permissions) {
            $res['Permissions'] = [];
            if (null !== $this->permissions && \is_array($this->permissions)) {
                $n = 0;
                foreach ($this->permissions as $item) {
                    $res['Permissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateARN) {
            $res['TemplateARN'] = $this->templateARN;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Interface'])) {
            $model->interface = $map['Interface'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = [];
                $n                  = 0;
                foreach ($map['Permissions'] as $item) {
                    $model->permissions[$n++] = null !== $item ? permissions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateARN'])) {
            $model->templateARN = $map['TemplateARN'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
