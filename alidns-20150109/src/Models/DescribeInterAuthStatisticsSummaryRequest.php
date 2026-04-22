<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeInterAuthStatisticsSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $endTimestamp;

    /**
     * @var string
     */
    public $growType;

    /**
     * @var string
     */
    public $orderBy;

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
    public $period;

    /**
     * @var string
     */
    public $rcode;

    /**
     * @var string
     */
    public $serverRegion;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var int
     */
    public $startTimestamp;

    /**
     * @var string
     */
    public $statisticalType;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'direction' => 'Direction',
        'domainName' => 'DomainName',
        'endTimestamp' => 'EndTimestamp',
        'growType' => 'GrowType',
        'orderBy' => 'OrderBy',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'period' => 'Period',
        'rcode' => 'Rcode',
        'serverRegion' => 'ServerRegion',
        'sourceType' => 'SourceType',
        'startTimestamp' => 'StartTimestamp',
        'statisticalType' => 'StatisticalType',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }

        if (null !== $this->growType) {
            $res['GrowType'] = $this->growType;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->rcode) {
            $res['Rcode'] = $this->rcode;
        }

        if (null !== $this->serverRegion) {
            $res['ServerRegion'] = $this->serverRegion;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        if (null !== $this->statisticalType) {
            $res['StatisticalType'] = $this->statisticalType;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }

        if (isset($map['GrowType'])) {
            $model->growType = $map['GrowType'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['Rcode'])) {
            $model->rcode = $map['Rcode'];
        }

        if (isset($map['ServerRegion'])) {
            $model->serverRegion = $map['ServerRegion'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        if (isset($map['StatisticalType'])) {
            $model->statisticalType = $map['StatisticalType'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
