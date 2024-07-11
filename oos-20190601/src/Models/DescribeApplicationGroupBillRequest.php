<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationGroupBillRequest extends Model
{
    /**
     * @description The application name.
     *
     * This parameter is required.
     * @example test_application
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The billing cycle, in the YYYY-MM format.
     *
     * This parameter is required.
     * @example 2023-06
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The application group name.
     *
     * This parameter is required.
     * @example test_application_group
     *
     * @var string
     */
    public $name;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example -
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

    /**
     * @description The type of the cloud resource.
     *
     * This parameter is required.
     * @example ALIYUN::ECS::INSTANCE
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'billingCycle'    => 'BillingCycle',
        'maxResults'      => 'MaxResults',
        'name'            => 'Name',
        'nextToken'       => 'NextToken',
        'regionId'        => 'RegionId',
        'resourceType'    => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationGroupBillRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
