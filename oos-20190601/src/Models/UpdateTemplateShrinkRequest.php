<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateTemplateShrinkRequest extends Model
{
    /**
     * @description The content of the template. The content must be in the JSON or YAML format, and its maximum size is 64 KB.
     *
     * @example { "FormatVersion": "OOS-2019-06-01", "Description": { "en": "Bulky starts the ECS instances", "name-en": "Bulky Start Instances", }, "Parameters": { "regionId": { "Type": "String", "Label": { "en": "RegionId", }, "AssociationProperty": "RegionId", "Default": "{{ ACS::RegionId }}" }, "targets": { "Type": "Json", "Label": { "en": "TargetInstance", }, "AssociationProperty": "Targets", "AssociationPropertyMetadata": { "ResourceType": "ALIYUN::ECS::Instance", "RegionId": "regionId" } }, "rateControl": { "Label": { "en": "RateControl", }, "Type": "Json", "AssociationProperty": "RateControl", "Default": { "Mode": "Concurrency", "MaxErrors": 0, "Concurrency": 10 } }, "OOSAssumeRole": { "Label": { "en": "OOSAssumeRole", }, "Type": "String", "Default": "OOSServiceRole" } }, "RamRole": "{{ OOSAssumeRole }}", "Tasks": \[ { "Name": "getInstance", "Description": { "en": "Views the ECS instances", }, "Action": "ACS::SelectTargets", "Properties": { "ResourceType": "ALIYUN::ECS::Instance", "RegionId": "{{ regionId }}", "Filters": \[ "{{ targets }}" ] }, "Outputs": { "instanceIds": { "Type": "List", "ValueSelector": "Instances.Instance\[].InstanceId" } } }, { "Name": "startInstance", "Action": "ACS::ECS::StartInstance", "Description": { "en": "Starts the ECS instances", }, "Properties": { "regionId": "{{ regionId }}", "instanceId": "{{ ACS::TaskLoopItem }}" }, "Loop": { "RateControl": "{{ rateControl }}", "Items": "{{ getInstance.instanceIds }}" } } ], "Outputs": { "instanceIds": { "Type": "List", "Value": "{{ getInstance.instanceIds }}" } } }
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tag keys and values. The number of key-value pairs ranges from 1 to 20.
     *
     * @example {"k1":"k2","k2":"v2"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The name of the template. The name can be up to 200 characters in length and can contain letters, digits, hyphens (-), and underscores (\_). The name cannot start with ALIYUN, ACS, ALIBABA, or ALICLOUD.
     *
     * @example MyTemplate
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The name of the template version.
     *
     * @example v2
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'content'         => 'Content',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tagsShrink'      => 'Tags',
        'templateName'    => 'TemplateName',
        'versionName'     => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
