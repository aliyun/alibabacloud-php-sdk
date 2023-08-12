<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateRequest extends Model
{
    /**
     * @description The ID of the change set.
     *
     * > You must specify one of the following parameters: StackId, ChangeSetId, StackGroupName, and TemplateId.
     * @example 1f6521a4-05af-4975-afe9-bc4b45ad****
     *
     * @var string
     */
    public $changeSetId;

    /**
     * @description Specifies whether to query the shared information about the template. Valid values:
     *
     *   Enabled
     *   Disabled (default)
     *
     * > Only the template owner can query the shared information of a template.
     * @example Enabled
     *
     * @var string
     */
    public $includePermission;

    /**
     * @description Specifies whether to query the information about tags. Valid values:
     *
     *   Enabled
     *   Disabled (default)
     *
     * > This parameter takes effect only if you specify TemplateId.
     * @example Enabled
     *
     * @var string
     */
    public $includeTags;

    /**
     * @description The region ID of the stack or stack group that uses the template. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the stack group.
     *
     * > You must specify one of the following parameters: StackId, ChangeSetId, StackGroupName, and TemplateId.
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The ID of the stack.
     *
     * > You must specify one of the following parameters: StackId, ChangeSetId, StackGroupName, and TemplateId.
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The ID of the template.
     *
     * > You must specify one of the following parameters: StackId, ChangeSetId, StackGroupName, and TemplateId.
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The stage of the template. This parameter takes effect only if you specify StackId, ChangeSetId, or StackGroupName.
     *
     * Valid values:
     *
     *   Processed (default): returns the processed template.
     *   Original: returns the original template.
     *
     * @example Processed
     *
     * @var string
     */
    public $templateStage;

    /**
     * @description The version of the template. This parameter takes effect only if you specify TemplateId.\
     * Valid values: v1 to v100.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'changeSetId'       => 'ChangeSetId',
        'includePermission' => 'IncludePermission',
        'includeTags'       => 'IncludeTags',
        'regionId'          => 'RegionId',
        'stackGroupName'    => 'StackGroupName',
        'stackId'           => 'StackId',
        'templateId'        => 'TemplateId',
        'templateStage'     => 'TemplateStage',
        'templateVersion'   => 'TemplateVersion',
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
        if (null !== $this->includePermission) {
            $res['IncludePermission'] = $this->includePermission;
        }
        if (null !== $this->includeTags) {
            $res['IncludeTags'] = $this->includeTags;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateStage) {
            $res['TemplateStage'] = $this->templateStage;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }
        if (isset($map['IncludePermission'])) {
            $model->includePermission = $map['IncludePermission'];
        }
        if (isset($map['IncludeTags'])) {
            $model->includeTags = $map['IncludeTags'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateStage'])) {
            $model->templateStage = $map['TemplateStage'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
