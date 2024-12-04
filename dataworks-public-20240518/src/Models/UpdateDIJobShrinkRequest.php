<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDIJobShrinkRequest extends Model
{
    /**
     * @description The ID of the synchronization task.
     *
     * This parameter is required.
     * @example 11588
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The description of the synchronization task.
     *
     * @var string
     */
    public $description;

    /**
     * @description The settings for the dimension of the synchronization task. The settings include processing policies for DDL messages, policies for data type mappings between source fields and destination fields, and runtime parameters of the synchronization task.
     *
     * @var string
     */
    public $jobSettingsShrink;

    /**
     * @description DataWorks工作空间ID。您可以通过[ListProjects](https://help.aliyun.com/document_detail/178393.html)接口获取工作空间ID。
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The resource settings.
     *
     * @var string
     */
    public $resourceSettingsShrink;

    /**
     * @description The list of mappings between rules used to select synchronization objects in the source and transformation rules applied to the selected synchronization objects. Each entry in the list displays a mapping between a rule used to select synchronization objects and a transformation rule applied to the selected synchronization objects.
     *
     * @var string
     */
    public $tableMappingsShrink;

    /**
     * @description The list of transformation rules for objects involved in the synchronization task. Each entry in the list defines a transformation rule.
     *
     * @var string
     */
    public $transformationRulesShrink;
    protected $_name = [
        'DIJobId'                   => 'DIJobId',
        'description'               => 'Description',
        'jobSettingsShrink'         => 'JobSettings',
        'projectId'                 => 'ProjectId',
        'resourceSettingsShrink'    => 'ResourceSettings',
        'tableMappingsShrink'       => 'TableMappings',
        'transformationRulesShrink' => 'TransformationRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobSettingsShrink) {
            $res['JobSettings'] = $this->jobSettingsShrink;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceSettingsShrink) {
            $res['ResourceSettings'] = $this->resourceSettingsShrink;
        }
        if (null !== $this->tableMappingsShrink) {
            $res['TableMappings'] = $this->tableMappingsShrink;
        }
        if (null !== $this->transformationRulesShrink) {
            $res['TransformationRules'] = $this->transformationRulesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDIJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JobSettings'])) {
            $model->jobSettingsShrink = $map['JobSettings'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceSettings'])) {
            $model->resourceSettingsShrink = $map['ResourceSettings'];
        }
        if (isset($map['TableMappings'])) {
            $model->tableMappingsShrink = $map['TableMappings'];
        }
        if (isset($map['TransformationRules'])) {
            $model->transformationRulesShrink = $map['TransformationRules'];
        }

        return $model;
    }
}
