<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;

class CreateConstraintRequest extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $constraintType;

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
    protected $_name = [
        'config' => 'Config',
        'constraintType' => 'ConstraintType',
        'description' => 'Description',
        'portfolioId' => 'PortfolioId',
        'productId' => 'ProductId',
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
