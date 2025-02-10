<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeRecordStatisticsRequest extends Model
{
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
    public $lang;
    /**
     * @var string
     */
    public $rr;
    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'domainName' => 'DomainName',
        'domainType' => 'DomainType',
        'endDate'    => 'EndDate',
        'lang'       => 'Lang',
        'rr'         => 'Rr',
        'startDate'  => 'StartDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
