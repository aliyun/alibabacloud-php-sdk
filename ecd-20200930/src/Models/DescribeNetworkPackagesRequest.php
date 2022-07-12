<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeNetworkPackagesRequest extends Model
{
    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $nextToken;

    /**
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
