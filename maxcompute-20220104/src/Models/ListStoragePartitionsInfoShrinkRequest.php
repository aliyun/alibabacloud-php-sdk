<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class ListStoragePartitionsInfoShrinkRequest extends Model
{
    /**
     * @description Specifies whether to sort data in ascending order.
     *
     * @example false
     *
     * @var bool
     */
    public $ascOrder;

    /**
     * @description The date on which the statistics are collected, in days. Set this parameter to a value in the YYYYMMdd format.
     *
     * This parameter is required.
     *
     * @example 20241205
     *
     * @var string
     */
    public $date;

    /**
     * @description The sorting column.
     *
     * @example totalFrequency
     *
     * @var string
     */
    public $orderColumn;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the partition that you want to use for fuzzy match.
     *
     * @example 20241201
     *
     * @var string
     */
    public $partitionPrefix;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The name of the schema.
     *
     * @example schema
     *
     * @var string
     */
    public $schema;

    /**
     * @description The ID of the tenant. You can log on to the MaxCompute console, and choose **Tenants** > **Tenant Property** from the left-side navigation pane to view the tenant ID.
     *
     * @example 40713753659****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The storage types.
     *
     * @var string
     */
    public $typesShrink;
    protected $_name = [
        'ascOrder' => 'ascOrder',
        'date' => 'date',
        'orderColumn' => 'orderColumn',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'partitionPrefix' => 'partitionPrefix',
        'region' => 'region',
        'schema' => 'schema',
        'tenantId' => 'tenantId',
        'typesShrink' => 'types',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ascOrder) {
            $res['ascOrder'] = $this->ascOrder;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->orderColumn) {
            $res['orderColumn'] = $this->orderColumn;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->partitionPrefix) {
            $res['partitionPrefix'] = $this->partitionPrefix;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }
        if (null !== $this->typesShrink) {
            $res['types'] = $this->typesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStoragePartitionsInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ascOrder'])) {
            $model->ascOrder = $map['ascOrder'];
        }
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['orderColumn'])) {
            $model->orderColumn = $map['orderColumn'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['partitionPrefix'])) {
            $model->partitionPrefix = $map['partitionPrefix'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }
        if (isset($map['types'])) {
            $model->typesShrink = $map['types'];
        }

        return $model;
    }
}
