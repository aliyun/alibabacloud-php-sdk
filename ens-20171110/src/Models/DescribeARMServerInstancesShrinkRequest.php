<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeARMServerInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $AICSpecsShrink;

    /**
     * @var bool
     */
    public $describeAICInstances;

    /**
     * @var string
     */
    public $ensRegionIdsShrink;

    /**
     * @var string
     */
    public $maxDate;

    /**
     * @var string
     */
    public $minDate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $orderByParams;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $serverIdsShrink;

    /**
     * @var string
     */
    public $serverSpecsShrink;

    /**
     * @var string
     */
    public $statesShrink;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'AICSpecsShrink' => 'AICSpecs',
        'describeAICInstances' => 'DescribeAICInstances',
        'ensRegionIdsShrink' => 'EnsRegionIds',
        'maxDate' => 'MaxDate',
        'minDate' => 'MinDate',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'orderByParams' => 'OrderByParams',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'serverIdsShrink' => 'ServerIds',
        'serverSpecsShrink' => 'ServerSpecs',
        'statesShrink' => 'States',
        'tagsShrink' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AICSpecsShrink) {
            $res['AICSpecs'] = $this->AICSpecsShrink;
        }

        if (null !== $this->describeAICInstances) {
            $res['DescribeAICInstances'] = $this->describeAICInstances;
        }

        if (null !== $this->ensRegionIdsShrink) {
            $res['EnsRegionIds'] = $this->ensRegionIdsShrink;
        }

        if (null !== $this->maxDate) {
            $res['MaxDate'] = $this->maxDate;
        }

        if (null !== $this->minDate) {
            $res['MinDate'] = $this->minDate;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->orderByParams) {
            $res['OrderByParams'] = $this->orderByParams;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->serverIdsShrink) {
            $res['ServerIds'] = $this->serverIdsShrink;
        }

        if (null !== $this->serverSpecsShrink) {
            $res['ServerSpecs'] = $this->serverSpecsShrink;
        }

        if (null !== $this->statesShrink) {
            $res['States'] = $this->statesShrink;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
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
        if (isset($map['AICSpecs'])) {
            $model->AICSpecsShrink = $map['AICSpecs'];
        }

        if (isset($map['DescribeAICInstances'])) {
            $model->describeAICInstances = $map['DescribeAICInstances'];
        }

        if (isset($map['EnsRegionIds'])) {
            $model->ensRegionIdsShrink = $map['EnsRegionIds'];
        }

        if (isset($map['MaxDate'])) {
            $model->maxDate = $map['MaxDate'];
        }

        if (isset($map['MinDate'])) {
            $model->minDate = $map['MinDate'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['OrderByParams'])) {
            $model->orderByParams = $map['OrderByParams'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ServerIds'])) {
            $model->serverIdsShrink = $map['ServerIds'];
        }

        if (isset($map['ServerSpecs'])) {
            $model->serverSpecsShrink = $map['ServerSpecs'];
        }

        if (isset($map['States'])) {
            $model->statesShrink = $map['States'];
        }

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
