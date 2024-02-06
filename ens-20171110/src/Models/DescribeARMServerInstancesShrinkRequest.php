<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeARMServerInstancesShrinkRequest extends Model
{
    /**
     * @description The container specifications.
     *
     * @var string
     */
    public $AICSpecsShrink;

    /**
     * @description Spcifies whether the result contains the container information. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $describeAICInstances;

    /**
     * @description The IDs of the Edge Node Service (ENS) nodes.
     *
     * @var string
     */
    public $ensRegionIdsShrink;

    /**
     * @description The end of the time range to query. Specify the time in the 2006-01-02 format. By default, the time range to query is not restricted.
     *
     * @example 2006-01-03
     *
     * @var string
     */
    public $maxDate;

    /**
     * @description The beginning of the time range to query. Specify the time in the 2006-01-02 format. By default, the time range to query is not restricted.
     *
     * @example 2006-01-02
     *
     * @var string
     */
    public $minDate;

    /**
     * @description The name of the server.
     *
     * @example Server-Name
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The sorting order of the results to return. Valid values: ServerIdSort, ServerNameSort, ExpireTimeSort, CreationTimeSort, and EnsRegionIdSort.
     *
     * asc: ascending order. desc: descending order.
     * @example {"ServerIdSort":"desc","ServerNameSort":"desc","ExpireTimeSort":"asc","CreationTimeSort":"asc","EnsRegionIdSort":"asc"}
     *
     * @var string
     */
    public $orderByParams;

    /**
     * @description The page number. Pages start from page **1**.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. The maximum value is **100**.
     *
     * Default value: **10**.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The IDs of the ARM servers.
     *
     * @var string
     */
    public $serverIdsShrink;

    /**
     * @description The server specifications.
     *
     * @var string
     */
    public $serverSpecsShrink;

    /**
     * @description The operation statuses.
     *
     * @var string
     */
    public $statesShrink;
    protected $_name = [
        'AICSpecsShrink'       => 'AICSpecs',
        'describeAICInstances' => 'DescribeAICInstances',
        'ensRegionIdsShrink'   => 'EnsRegionIds',
        'maxDate'              => 'MaxDate',
        'minDate'              => 'MinDate',
        'name'                 => 'Name',
        'namespace'            => 'Namespace',
        'orderByParams'        => 'OrderByParams',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'serverIdsShrink'      => 'ServerIds',
        'serverSpecsShrink'    => 'ServerSpecs',
        'statesShrink'         => 'States',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeARMServerInstancesShrinkRequest
     */
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

        return $model;
    }
}
