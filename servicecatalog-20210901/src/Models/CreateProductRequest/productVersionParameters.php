<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProductRequest;

use AlibabaCloud\Tea\Model;

class productVersionParameters extends Model
{
    /**
     * @description Specifies whether to enable the product version. Valid values:
     *
     *   true: enables the product version. This is the default value.
     *   false: disables the product version.
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
     *   Recommended: the recommended version.
     *   Latest: the latest version.
     *   Deprecated: the version that is about to be discontinued.
     *
     * @example Default
     *
     * @var string
     */
    public $guidance;

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
     * Set the value to RosTerraformTemplate, which specifies the Terraform template that is supported by ROS.
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
     * @return productVersionParameters
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
