<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class CreateProductVersionRequest extends Model
{
    /**
     * @description Specifies whether the product version is active. Valid values:
     *
     *   true: The product version is active. This is the default value.
     *   false: The product version is inactive.
     *
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @description The description of the product version.
     *
     * The value must be 1 to 128 characters in length.
     * @example The description of the product version.
     *
     * @var string
     */
    public $description;

    /**
     * @description The recommendation information. Valid values:
     *
     *   Default: No recommendation information is provided. This is the default value.
     *   Recommended: the recommendation version.
     *   Latest: the latest version.
     *   Deprecated: the version that is about to be discontinued.
     *
     * @example Default
     *
     * @var string
     */
    public $guidance;

    /**
     * @description The ID of the product to which the product version belongs.
     *
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;

    /**
     * @description The name of the product version.
     *
     * The value must be 1 to 128 characters in length.
     * @example 1.0
     *
     * @var string
     */
    public $productVersionName;

    /**
     * @description The type of the template.
     *
     * The value is fixed as RosTerraformTemplate, which specifies the Terraform template that is supported by Resource Orchestration Service (ROS).
     * @example RosTerraformTemplate
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The URL of the template.
     *
     * For more information about how to obtain the URL of a template, see [CreateTemplate](~~CreateTemplate~~).
     * @example oss://servicecatalog-cn-hangzhou/146611588617****\/terraform/template/tpl-bp1217we23****\/template.json
     *
     * @var string
     */
    public $templateUrl;
    protected $_name = [
        'active'             => 'Active',
        'description'        => 'Description',
        'guidance'           => 'Guidance',
        'productId'          => 'ProductId',
        'productVersionName' => 'ProductVersionName',
        'templateType'       => 'TemplateType',
        'templateUrl'        => 'TemplateUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->guidance) {
            $res['Guidance'] = $this->guidance;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productVersionName) {
            $res['ProductVersionName'] = $this->productVersionName;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->templateUrl) {
            $res['TemplateUrl'] = $this->templateUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Guidance'])) {
            $model->guidance = $map['Guidance'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductVersionName'])) {
            $model->productVersionName = $map['ProductVersionName'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['TemplateUrl'])) {
            $model->templateUrl = $map['TemplateUrl'];
        }

        return $model;
    }
}
