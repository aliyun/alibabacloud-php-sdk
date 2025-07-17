<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDIJobShrinkRequest extends Model
{
    /**
     * @description This parameter is deprecated. Use the Id parameter instead.
     *
     * @example 11588
     *
     * @deprecated
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @var string
     */
    public $description;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 11588
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $jobSettingsShrink;

    /**
     * @description The DataWorks workspace ID. You can call the [ListProjects](https://help.aliyun.com/document_detail/178393.html) operation to obtain the ID.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $resourceSettingsShrink;

    /**
     * @var string
     */
    public $tableMappingsShrink;

    /**
     * @var string
     */
    public $transformationRulesShrink;
    protected $_name = [
        'DIJobId' => 'DIJobId',
        'description' => 'Description',
        'id' => 'Id',
        'jobSettingsShrink' => 'JobSettings',
        'projectId' => 'ProjectId',
        'resourceSettingsShrink' => 'ResourceSettings',
        'tableMappingsShrink' => 'TableMappings',
        'transformationRulesShrink' => 'TransformationRules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
