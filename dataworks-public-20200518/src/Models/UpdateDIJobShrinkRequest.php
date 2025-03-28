<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class UpdateDIJobShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $DIJobId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $jobSettingsShrink;

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
        'jobSettingsShrink' => 'JobSettings',
        'resourceSettingsShrink' => 'ResourceSettings',
        'tableMappingsShrink' => 'TableMappings',
        'transformationRulesShrink' => 'TransformationRules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
