<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductVersionResponseBody;

use AlibabaCloud\Tea\Model;

class productVersionDetail extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @example 2022-04-12T06:10:37Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example Default
     *
     * @var string
     */
    public $guidance;

    /**
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;

    /**
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $productVersionName;

    /**
     * @example RosTerraformTemplate
     *
     * @var string
     */
    public $templateType;

    /**
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
