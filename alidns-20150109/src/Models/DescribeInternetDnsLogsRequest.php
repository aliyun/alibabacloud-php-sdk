<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeInternetDnsLogsRequest extends Model
{
    /**
     * @var int
     */
    public $accountId;

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
    public $lang;

    /**
     * @var string
     */
    public $module;

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
    public $queryCondition;

    /**
     * @var int
     */
    public $startTimestamp;
    protected $_name = [
        'accountId' => 'AccountId',
        'domainName' => 'DomainName',
        'endTimestamp' => 'EndTimestamp',
        'lang' => 'Lang',
        'module' => 'Module',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryCondition' => 'QueryCondition',
        'startTimestamp' => 'StartTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryCondition) {
            $res['QueryCondition'] = $this->queryCondition;
        }

        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryCondition'])) {
            $model->queryCondition = $map['QueryCondition'];
        }

        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        return $model;
    }
}
