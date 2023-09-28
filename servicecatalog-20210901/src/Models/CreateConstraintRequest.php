<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class CreateConstraintRequest extends Model
{
    /**
     * @description The configuration of the constraint.
     *
     * Format: { "LocalRoleName": "\<role_name>" }.
     * @example { "LocalRoleName": "TestRole" }
     *
     * @var string
     */
    public $config;

    /**
     * @description The type of the constraint.
     *
     * The value is fixed as Launch, which specifies the launch constraint.
     * @example Launch
     *
     * @var string
     */
    public $constraintType;

    /**
     * @description The description of the constraint.
     *
     * The value must be 1 to 128 characters in length.
     * @example Launch as local role TestRole
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the product portfolio to which the constraint belongs.
     *
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @description The ID of the product for which the constraint is created.
     *
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;
    protected $_name = [
        'config'         => 'Config',
        'constraintType' => 'ConstraintType',
        'description'    => 'Description',
        'portfolioId'    => 'PortfolioId',
        'productId'      => 'ProductId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->constraintType) {
            $res['ConstraintType'] = $this->constraintType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->portfolioId) {
            $res['PortfolioId'] = $this->portfolioId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConstraintRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ConstraintType'])) {
            $model->constraintType = $map['ConstraintType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        return $model;
    }
}
