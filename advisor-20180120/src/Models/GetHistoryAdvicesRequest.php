<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetHistoryAdvicesRequest extends Model
{
    /**
     * @example -
     *
     * @var int
     */
    public $associateUid;

    /**
     * @example EcsHighCpuUtilization
     *
     * @var string
     */
    public $checkId;

    /**
     * @example -
     *
     * @var int
     */
    public $clientUid;

    /**
     * @example 2023-07-01
     *
     * @var string
     */
    public $endDate;

    /**
     * @example -
     *
     * @var string
     */
    public $filterType;

    /**
     * @example -
     *
     * @var string
     */
    public $filterValue;

    /**
     * @example false
     *
     * @var bool
     */
    public $isExpired;

    /**
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ecs
     *
     * @var string
     */
    public $product;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $reverse;

    /**
     * @example 1
     *
     * @var string
     */
    public $severity;

    /**
     * @example 2023-07-01
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'associateUid' => 'AssociateUid',
        'checkId'      => 'CheckId',
        'clientUid'    => 'ClientUid',
        'endDate'      => 'EndDate',
        'filterType'   => 'FilterType',
        'filterValue'  => 'FilterValue',
        'isExpired'    => 'IsExpired',
        'language'     => 'Language',
        'pageNum'      => 'PageNum',
        'pageSize'     => 'PageSize',
        'product'      => 'Product',
        'region'       => 'Region',
        'resourceId'   => 'ResourceId',
        'reverse'      => 'Reverse',
        'severity'     => 'Severity',
        'startDate'    => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associateUid) {
            $res['AssociateUid'] = $this->associateUid;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->clientUid) {
            $res['ClientUid'] = $this->clientUid;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->filterType) {
            $res['FilterType'] = $this->filterType;
        }
        if (null !== $this->filterValue) {
            $res['FilterValue'] = $this->filterValue;
        }
        if (null !== $this->isExpired) {
            $res['IsExpired'] = $this->isExpired;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHistoryAdvicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociateUid'])) {
            $model->associateUid = $map['AssociateUid'];
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['ClientUid'])) {
            $model->clientUid = $map['ClientUid'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['FilterType'])) {
            $model->filterType = $map['FilterType'];
        }
        if (isset($map['FilterValue'])) {
            $model->filterValue = $map['FilterValue'];
        }
        if (isset($map['IsExpired'])) {
            $model->isExpired = $map['IsExpired'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
