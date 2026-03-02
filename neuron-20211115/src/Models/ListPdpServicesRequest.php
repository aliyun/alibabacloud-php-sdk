<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListPdpServicesRequest extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $name;

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
    public $pbcId;

    /**
     * @var int[]
     */
    public $pdpServiceIds;

    /**
     * @var int
     */
    public $productId;
    protected $_name = [
        'alias' => 'alias',
        'enterpriseId' => 'enterpriseId',
        'name' => 'name',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'pbcId' => 'pbcId',
        'pdpServiceIds' => 'pdpServiceIds',
        'productId' => 'productId',
    ];

    public function validate()
    {
        if (\is_array($this->pdpServiceIds)) {
            Model::validateArray($this->pdpServiceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
        }

        if (null !== $this->pdpServiceIds) {
            if (\is_array($this->pdpServiceIds)) {
                $res['pdpServiceIds'] = [];
                $n1 = 0;
                foreach ($this->pdpServiceIds as $item1) {
                    $res['pdpServiceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
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

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        if (isset($map['pdpServiceIds'])) {
            if (!empty($map['pdpServiceIds'])) {
                $model->pdpServiceIds = [];
                $n1 = 0;
                foreach ($map['pdpServiceIds'] as $item1) {
                    $model->pdpServiceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        return $model;
    }
}
