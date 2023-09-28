<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetConstraintResponseBody;

use AlibabaCloud\Tea\Model;

class constraintDetail extends Model
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
     * @description The ID of the constraint.
     *
     * @example cons-bp1yx7x42v****
     *
     * @var string
     */
    public $constraintId;

    /**
     * @description The type of the constraint.
     *
     * The value is fixed as Launch, which indicates the launch constraint.
     * @example Launch
     *
     * @var string
     */
    public $constraintType;

    /**
     * @description The time when the constraint was created.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-04-12T06:11:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the constraint.
     *
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

    /**
     * @description The name of the product.
     *
     * @example DEMO-Create an ECS instance.
     *
     * @var string
     */
    public $productName;
    protected $_name = [
        'config'         => 'Config',
        'constraintId'   => 'ConstraintId',
        'constraintType' => 'ConstraintType',
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'portfolioId'    => 'PortfolioId',
        'productId'      => 'ProductId',
        'productName'    => 'ProductName',
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
        if (null !== $this->constraintId) {
            $res['ConstraintId'] = $this->constraintId;
        }
        if (null !== $this->constraintType) {
            $res['ConstraintType'] = $this->constraintType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return constraintDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ConstraintId'])) {
            $model->constraintId = $map['ConstraintId'];
        }
        if (isset($map['ConstraintType'])) {
            $model->constraintType = $map['ConstraintType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
