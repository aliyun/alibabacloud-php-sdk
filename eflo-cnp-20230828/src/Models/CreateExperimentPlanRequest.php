<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Tea\Model;

class CreateExperimentPlanRequest extends Model
{
    /**
     * @description Additional parameters
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $externalParams;

    /**
     * @description Resource group ID
     *
     * @example rg-aekzij65sf2rr5i
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Resource ID
     *
     * @example 189
     *
     * @var int
     */
    public $resourceId;

    /**
     * @description Template ID
     *
     * @example 349623
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'externalParams'  => 'ExternalParams',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId'      => 'ResourceId',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalParams) {
            $res['ExternalParams'] = $this->externalParams;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExperimentPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalParams'])) {
            $model->externalParams = $map['ExternalParams'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
