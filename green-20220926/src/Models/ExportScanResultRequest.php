<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class ExportScanResultRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 2024-03-11 10:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $query;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example text
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $sort;

    /**
     * @example 2024-03-10 10:00:00
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'endDate'      => 'EndDate',
        'pageSize'     => 'PageSize',
        'query'        => 'Query',
        'regionId'     => 'RegionId',
        'resourceType' => 'ResourceType',
        'sort'         => 'Sort',
        'startDate'    => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportScanResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
