<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeNetworkPackagesRequest extends Model
{
    /**
     * @description The billing method of the Internet access package. Valid values:
     *
     *   PayByTraffic: pay-by-data-transfer
     *   PayByBandwidth: pay-by-bandwidth
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The number of entries to return on each page.
     *
     *   Maximum value: 100
     *   Default value: 10
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The IDs of the Internet access packages. You can specify 1 to 100 IDs of Internet access packages.
     *
     * @example np-amtp8e8q1o9e4****
     *
     * @var string[]
     */
    public $networkPackageId;

    /**
     * @description The token that determines the start point of the next query.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'internetChargeType' => 'InternetChargeType',
        'maxResults'         => 'MaxResults',
        'networkPackageId'   => 'NetworkPackageId',
        'nextToken'          => 'NextToken',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->networkPackageId) {
            $res['NetworkPackageId'] = $this->networkPackageId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkPackagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetworkPackageId'])) {
            if (!empty($map['NetworkPackageId'])) {
                $model->networkPackageId = $map['NetworkPackageId'];
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
