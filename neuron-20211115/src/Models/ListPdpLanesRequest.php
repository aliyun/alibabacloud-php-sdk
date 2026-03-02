<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListPdpLanesRequest extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $inletServiceId;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $productId;
    protected $_name = [
        'companyId' => 'companyId',
        'env' => 'env',
        'inletServiceId' => 'inletServiceId',
        'keyword' => 'keyword',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'productId' => 'productId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->inletServiceId) {
            $res['inletServiceId'] = $this->inletServiceId;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['orderDirection'] = $this->orderDirection;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
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
        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['inletServiceId'])) {
            $model->inletServiceId = $map['inletServiceId'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['orderDirection'])) {
            $model->orderDirection = $map['orderDirection'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        return $model;
    }
}
