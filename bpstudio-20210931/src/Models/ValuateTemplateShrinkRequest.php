<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Dara\Model;

class ValuateTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $areaId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instancesShrink;

    /**
     * @var string
     */
    public $resourceGroupId;

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
        'clientToken' => 'ClientToken',
        'instancesShrink' => 'Instances',
        'resourceGroupId' => 'ResourceGroupId',
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->instancesShrink) {
            $res['Instances'] = $this->instancesShrink;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Instances'])) {
            $model->instancesShrink = $map['Instances'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
