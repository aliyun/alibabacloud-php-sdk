<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody;

use AlibabaCloud\Tea\Model;

class productVersionDetail extends Model
{
    /**
     * @description Indicates whether the product version is visible to end users. Valid values:
     *
     *   true (defaut)
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @description The time when the product version was created.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-04-12T06:10:37Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the product version.
     *
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
     *   Deprecated: the version that is about to be deprecated.
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
     * @description The ID of the product version.
     *
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @description The name for the version of the product.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $productVersionName;

    /**
     * @description The type of the template.
     *
     * The value is fixed as RosTerraformTemplate, which indicates that the Terraform template is supported by ROS.
     * @example RosTerraformTemplate
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The URL of the template.
     *
     * @example oss://servicecatalog-cn-hangzhou/146611588617****\/terraform/template/tpl-bp1217we23****\/template.json
     *
     * @var string
     */
    public $templateUrl;
    protected $_name = [
        'active'             => 'Active',
        'createTime'         => 'CreateTime',
        'description'        => 'Description',
        'guidance'           => 'Guidance',
        'productId'          => 'ProductId',
        'productVersionId'   => 'ProductVersionId',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->productVersionId) {
            $res['ProductVersionId'] = $this->productVersionId;
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
     * @return productVersionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['ProductVersionId'])) {
            $model->productVersionId = $map['ProductVersionId'];
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
