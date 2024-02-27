<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class CustomerQuotaRecordListRequest extends Model
{
    /**
     * @description End Date Format: yyyy-MM-dd
     *
     * @example 2023-09-24
     *
     * @var string
     */
    public $endDate;

    /**
     * @description Customer UID
     *
     * @example 5113766248601929
     *
     * @var int
     */
    public $endUserPk;

    /**
     * @description Multilingual Parameters, the default language is English.</br>
     * ja: Japanese </br>
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description Operation Type Enum</br>
     * quota_amount_adjust Adjust the amount of quota</br>
     * @example all
     *
     * @var string
     */
    public $operationType;

    /**
     * @description Pagination, current page number, starting from 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description Pagination, record number on each page. Maximum 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Start Date Format: yyyy-MM-dd
     *
     * @example 2023-01-02
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate'       => 'EndDate',
        'endUserPk'     => 'EndUserPk',
        'language'      => 'Language',
        'operationType' => 'OperationType',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'startDate'     => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->endUserPk) {
            $res['EndUserPk'] = $this->endUserPk;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CustomerQuotaRecordListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['EndUserPk'])) {
            $model->endUserPk = $map['EndUserPk'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
