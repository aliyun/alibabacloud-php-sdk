<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $changeSetId;

    /**
     * @var string
     */
    public $includePermission;

    /**
     * @var string
     */
    public $includeTags;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateStage;

    /**
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
