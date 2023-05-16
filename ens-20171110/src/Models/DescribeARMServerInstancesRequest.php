<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeARMServerInstancesRequest extends Model
{
    /**
     * @var string[]
     */
    public $AICSpecs;

    /**
     * @var bool
     */
    public $describeAICInstances;

    /**
     * @var string[]
     */
    public $ensRegionIds;

    /**
     * @var string
     */
    public $latestAction;

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
     * @example {"ServerIdSort":"desc","ServerNameSort":"desc","ExpireTimeSort":"asc","CreationTimeSort":"asc","EnsRegionIdSort":"asc"}
     *
     * @var string
     */
    public $orderByParams;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $serverIds;

    /**
     * @var string[]
     */
    public $serverSpecs;

    /**
     * @var string[]
     */
    public $states;
    protected $_name = [
        'AICSpecs'             => 'AICSpecs',
        'describeAICInstances' => 'DescribeAICInstances',
        'ensRegionIds'         => 'EnsRegionIds',
        'latestAction'         => 'LatestAction',
        'maxDate'              => 'MaxDate',
        'minDate'              => 'MinDate',
        'name'                 => 'Name',
        'namespace'            => 'Namespace',
        'orderByParams'        => 'OrderByParams',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'serverIds'            => 'ServerIds',
        'serverSpecs'          => 'ServerSpecs',
        'states'               => 'States',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AICSpecs) {
            $res['AICSpecs'] = $this->AICSpecs;
        }
        if (null !== $this->describeAICInstances) {
            $res['DescribeAICInstances'] = $this->describeAICInstances;
        }
        if (null !== $this->ensRegionIds) {
            $res['EnsRegionIds'] = $this->ensRegionIds;
        }
        if (null !== $this->latestAction) {
            $res['LatestAction'] = $this->latestAction;
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
        if (null !== $this->serverIds) {
            $res['ServerIds'] = $this->serverIds;
        }
        if (null !== $this->serverSpecs) {
            $res['ServerSpecs'] = $this->serverSpecs;
        }
        if (null !== $this->states) {
            $res['States'] = $this->states;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeARMServerInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AICSpecs'])) {
            if (!empty($map['AICSpecs'])) {
                $model->AICSpecs = $map['AICSpecs'];
            }
        }
        if (isset($map['DescribeAICInstances'])) {
            $model->describeAICInstances = $map['DescribeAICInstances'];
        }
        if (isset($map['EnsRegionIds'])) {
            if (!empty($map['EnsRegionIds'])) {
                $model->ensRegionIds = $map['EnsRegionIds'];
            }
        }
        if (isset($map['LatestAction'])) {
            $model->latestAction = $map['LatestAction'];
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
            if (!empty($map['ServerIds'])) {
                $model->serverIds = $map['ServerIds'];
            }
        }
        if (isset($map['ServerSpecs'])) {
            if (!empty($map['ServerSpecs'])) {
                $model->serverSpecs = $map['ServerSpecs'];
            }
        }
        if (isset($map['States'])) {
            if (!empty($map['States'])) {
                $model->states = $map['States'];
            }
        }

        return $model;
    }
}
