<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListPdpServiceGroupsRequest extends Model
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
    public $env;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var int[]
     */
    public $ids;

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
     * @var string
     */
    public $orgType;

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
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'alias' => 'alias',
        'enterpriseId' => 'enterpriseId',
        'env' => 'env',
        'envType' => 'envType',
        'groupType' => 'groupType',
        'ids' => 'ids',
        'name' => 'name',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'orgType' => 'orgType',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'pbcId' => 'pbcId',
        'productId' => 'productId',
        'region' => 'region',
        'repoId' => 'repoId',
        'serviceId' => 'serviceId',
    ];

    public function validate()
    {
        if (\is_array($this->ids)) {
            Model::validateArray($this->ids);
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

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->envType) {
            $res['envType'] = $this->envType;
        }

        if (null !== $this->groupType) {
            $res['groupType'] = $this->groupType;
        }

        if (null !== $this->ids) {
            if (\is_array($this->ids)) {
                $res['ids'] = [];
                $n1 = 0;
                foreach ($this->ids as $item1) {
                    $res['ids'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->orgType) {
            $res['orgType'] = $this->orgType;
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

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->repoId) {
            $res['repoId'] = $this->repoId;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
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

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['envType'])) {
            $model->envType = $map['envType'];
        }

        if (isset($map['groupType'])) {
            $model->groupType = $map['groupType'];
        }

        if (isset($map['ids'])) {
            if (!empty($map['ids'])) {
                $model->ids = [];
                $n1 = 0;
                foreach ($map['ids'] as $item1) {
                    $model->ids[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['orgType'])) {
            $model->orgType = $map['orgType'];
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

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['repoId'])) {
            $model->repoId = $map['repoId'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
