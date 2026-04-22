<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeInterAuthStatisticsHistoryRequest extends Model
{
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
    public $rcode;

    /**
     * @var string
     */
    public $serverRegion;

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
        'domainName' => 'DomainName',
        'endTimestamp' => 'EndTimestamp',
        'rcode' => 'Rcode',
        'serverRegion' => 'ServerRegion',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }

        if (null !== $this->rcode) {
            $res['Rcode'] = $this->rcode;
        }

        if (null !== $this->serverRegion) {
            $res['ServerRegion'] = $this->serverRegion;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }

        if (isset($map['Rcode'])) {
            $model->rcode = $map['Rcode'];
        }

        if (isset($map['ServerRegion'])) {
            $model->serverRegion = $map['ServerRegion'];
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
