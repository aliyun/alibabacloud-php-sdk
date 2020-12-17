<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $changeSetId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $templateStage;

    /**
     * @var string
     */
    public $includePermission;

    /**
     * @var string
     */
    public $stackGroupName;
    protected $_name = [
        'stackId'           => 'StackId',
        'regionId'          => 'RegionId',
        'changeSetId'       => 'ChangeSetId',
        'templateId'        => 'TemplateId',
        'templateVersion'   => 'TemplateVersion',
        'templateStage'     => 'TemplateStage',
        'includePermission' => 'IncludePermission',
        'stackGroupName'    => 'StackGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->templateStage) {
            $res['TemplateStage'] = $this->templateStage;
        }
        if (null !== $this->includePermission) {
            $res['IncludePermission'] = $this->includePermission;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
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
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['TemplateStage'])) {
            $model->templateStage = $map['TemplateStage'];
        }
        if (isset($map['IncludePermission'])) {
            $model->includePermission = $map['IncludePermission'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        return $model;
    }
}
