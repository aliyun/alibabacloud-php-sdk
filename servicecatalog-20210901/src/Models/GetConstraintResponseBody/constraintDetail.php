<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetConstraintResponseBody;

use AlibabaCloud\Dara\Model;

class constraintDetail extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $constraintId;

    /**
     * @var string
     */
    public $constraintType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $portfolioId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;
    protected $_name = [
        'config' => 'Config',
        'constraintId' => 'ConstraintId',
        'constraintType' => 'ConstraintType',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'portfolioId' => 'PortfolioId',
        'productId' => 'ProductId',
        'productName' => 'ProductName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
