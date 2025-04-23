<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeRecordResolveStatisticsSummaryRequest extends Model
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
     * @var string
     */
    public $domainType;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $lang;

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
    public $searchMode;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int
     */
    public $threshold;
    protected $_name = [
        'direction' => 'Direction',
        'domainName' => 'DomainName',
        'domainType' => 'DomainType',
        'endDate' => 'EndDate',
        'keyword' => 'Keyword',
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchMode' => 'SearchMode',
        'startDate' => 'StartDate',
        'threshold' => 'Threshold',
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

        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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

        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
