<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeTemplateAttributeRequest extends Model
{
    /**
     * @description The type of template. The value can be a custom value.
     *
     *   If the parameter is set to `kubernetes`, the template is displayed on the Templates page in the console.
     *   If the parameter is set to `compose`, the template is displayed on the Container Service - Swarm page in the console. Container Service for Swarm is deprecated.
     *   If the value of the parameter is not `kubernetes`, the template is not displayed on the Templates page in the console. We recommend that you set the parameter to `kubernetes`.
     *
     * Default value: `kubernetes`.
     * @example kubernetes
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'templateType' => 'template_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateType) {
            $res['template_type'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTemplateAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['template_type'])) {
            $model->templateType = $map['template_type'];
        }

        return $model;
    }
}
