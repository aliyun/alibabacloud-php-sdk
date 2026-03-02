<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListPdpLanesForServiceGroupShrinkRequest extends Model
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
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $laneIdsShrink;

    /**
     * @var string
     */
    public $operator;

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
    public $serviceGroupId;

    /**
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'companyId' => 'companyId',
        'env' => 'env',
        'keyword' => 'keyword',
        'laneIdsShrink' => 'laneIds',
        'operator' => 'operator',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'serviceGroupId' => 'serviceGroupId',
        'serviceId' => 'serviceId',
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

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->laneIdsShrink) {
            $res['laneIds'] = $this->laneIdsShrink;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
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

        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
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
        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['laneIds'])) {
            $model->laneIdsShrink = $map['laneIds'];
        }

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
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

        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
