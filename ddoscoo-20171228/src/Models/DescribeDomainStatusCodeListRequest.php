<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainStatusCodeListRequest extends Model
{
    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1583683200
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1800
     *
     * @var int
     */
    public $interval;

    /**
     * @description This parameter is required.
     *
     * @example upstream
     *
     * @var string
     */
    public $queryType;

    /**
     * @example default
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 1582992000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'domain'          => 'Domain',
        'endTime'         => 'EndTime',
        'interval'        => 'Interval',
        'queryType'       => 'QueryType',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainStatusCodeListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
