<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class ValuateTemplateShrinkRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $areaId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example 1600765710019
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The instances to be replaced.
     *
     * @var string
     */
    public $instancesShrink;

    /**
     * @description The ID of the resource group to which the application belongs.
     *
     * @example rg-acfmyjt3c5om3fi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The template ID.
     *
     * @example 0KSHPM6SJU03TNZP
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The parameter values that are contained in the template. If the template contains no parameter values, the default values are used.
     *
     * @var string
     */
    public $variablesShrink;
    protected $_name = [
        'areaId'          => 'AreaId',
        'clientToken'     => 'ClientToken',
        'instancesShrink' => 'Instances',
        'resourceGroupId' => 'ResourceGroupId',
        'templateId'      => 'TemplateId',
        'variablesShrink' => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ValuateTemplateShrinkRequest
     */
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
