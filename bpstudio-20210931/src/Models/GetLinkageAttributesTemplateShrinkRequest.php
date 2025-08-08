<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Dara\Model;

class GetLinkageAttributesTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $areaId;

    /**
     * @var string
     */
    public $instancesShrink;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $targetVariable;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $variablesShrink;
    protected $_name = [
        'areaId' => 'AreaId',
        'instancesShrink' => 'Instances',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'targetVariable' => 'TargetVariable',
        'templateId' => 'TemplateId',
        'variablesShrink' => 'Variables',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }

        if (null !== $this->instancesShrink) {
            $res['Instances'] = $this->instancesShrink;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->targetVariable) {
            $res['TargetVariable'] = $this->targetVariable;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->variablesShrink) {
            $res['Variables'] = $this->variablesShrink;
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
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }

        if (isset($map['Instances'])) {
            $model->instancesShrink = $map['Instances'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['TargetVariable'])) {
            $model->targetVariable = $map['TargetVariable'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['Variables'])) {
            $model->variablesShrink = $map['Variables'];
        }

        return $model;
    }
}
