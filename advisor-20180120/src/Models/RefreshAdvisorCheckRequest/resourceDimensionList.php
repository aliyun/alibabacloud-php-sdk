<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorCheckRequest;

use AlibabaCloud\Dara\Model;

class resourceDimensionList extends Model
{
    /**
     * @var bool
     */
    public $cost;

    /**
     * @var bool
     */
    public $performance;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var bool
     */
    public $reliablility;

    /**
     * @var bool
     */
    public $security;

    /**
     * @var bool
     */
    public $service;
    protected $_name = [
        'cost' => 'Cost',
        'performance' => 'Performance',
        'product' => 'Product',
        'productName' => 'ProductName',
        'reliablility' => 'Reliablility',
        'security' => 'Security',
        'service' => 'Service',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }

        if (null !== $this->performance) {
            $res['Performance'] = $this->performance;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->reliablility) {
            $res['Reliablility'] = $this->reliablility;
        }

        if (null !== $this->security) {
            $res['Security'] = $this->security;
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
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
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }

        if (isset($map['Performance'])) {
            $model->performance = $map['Performance'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['Reliablility'])) {
            $model->reliablility = $map['Reliablility'];
        }

        if (isset($map['Security'])) {
            $model->security = $map['Security'];
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
