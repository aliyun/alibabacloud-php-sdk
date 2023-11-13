<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainViewTopCostTimeRequest extends Model
{
    /**
     * @description The domain name of the website.
     *
     * > A forwarding rule must be configured for the domain name. You can call the [DescribeDomains](~~91724~~) operation to query all domain names.
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * > This UNIX timestamp must indicate a point in time that is accurate to the minute.
     * @example 1583683200
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * @example default
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * > This UNIX timestamp must indicate a point in time that is accurate to the minute.
     * @example 1582992000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The number of URLs to query. Valid values: **1** to **100**.
     *
     * @example 5
     *
     * @var int
     */
    public $top;
    protected $_name = [
        'domain'          => 'Domain',
        'endTime'         => 'EndTime',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime'       => 'StartTime',
        'top'             => 'Top',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainViewTopCostTimeRequest
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }

        return $model;
    }
}
