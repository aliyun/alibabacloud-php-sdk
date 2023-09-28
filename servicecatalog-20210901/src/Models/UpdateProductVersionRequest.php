<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UpdateProductVersionRequest extends Model
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
     * @description The ID of the product version.
     *
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @description The name of the product version.
     *
     * The value must be 1 to 128 characters in length.
     * @example 1.0
     *
     * @var string
     */
    public $productVersionName;
    protected $_name = [
        'active'             => 'Active',
        'description'        => 'Description',
        'guidance'           => 'Guidance',
        'productVersionId'   => 'ProductVersionId',
        'productVersionName' => 'ProductVersionName',
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
        if (null !== $this->productVersionId) {
            $res['ProductVersionId'] = $this->productVersionId;
        }
        if (null !== $this->productVersionName) {
            $res['ProductVersionName'] = $this->productVersionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProductVersionRequest
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
        if (isset($map['ProductVersionId'])) {
            $model->productVersionId = $map['ProductVersionId'];
        }
        if (isset($map['ProductVersionName'])) {
            $model->productVersionName = $map['ProductVersionName'];
        }

        return $model;
    }
}
