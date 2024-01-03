<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateTemplateRequest\instances;
use AlibabaCloud\Tea\Model;

class ValuateTemplateRequest extends Model
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
     * @var instances[]
     */
    public $instances;

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
     * @var string[]
     */
    public $variables;
    protected $_name = [
        'areaId'          => 'AreaId',
        'clientToken'     => 'ClientToken',
        'instances'       => 'Instances',
        'resourceGroupId' => 'ResourceGroupId',
        'templateId'      => 'TemplateId',
        'variables'       => 'Variables',
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
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValuateTemplateRequest
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
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }

        return $model;
    }
}
