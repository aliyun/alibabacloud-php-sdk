<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainOverviewRequest extends Model
{
    /**
     * @description The domain name of the website that you want to query. If you leave this parameter unspecified, the statistics on all domain names are queried.
     *
     * > The domain name must be added to Anti-DDoS Pro or Anti-DDoS Premium. You can call the [DescribeDomains](~~91724~~) operation to query all the domain names that are added to Anti-DDoS Pro or Anti-DDoS Premium.
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds. If you leave this parameter unspecified, the current system time is used as the end time.
     *
     * > This UNIX timestamp must indicate a point in time that is accurate to the minute.
     * @example 1623427200
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * For more information about resource groups, see [Create a resource group](~~94485~~).
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * > This UNIX timestamp must indicate a point in time that is accurate to the minute.
     * @example 1619798400
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'domain'          => 'Domain',
        'endTime'         => 'EndTime',
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
     * @return DescribeDomainOverviewRequest
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

        return $model;
    }
}
