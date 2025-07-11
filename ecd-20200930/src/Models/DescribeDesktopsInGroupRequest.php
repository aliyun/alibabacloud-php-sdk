<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDesktopsInGroupRequest extends Model
{
    /**
     * @var int
     */
    public $customEndTimePeriod;

    /**
     * @var int
     */
    public $customStartTimePeriod;

    /**
     * @description The ID of the cloud computer share.
     *
     * This parameter is required.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description Specifies whether to ignore deletion flags.
     *
     * Default value: true. Valid values:
     *
     *   true: ignores deletion flags. The cloud computers that were deleted are returned.
     *   false: does not ignore deletion flags. The cloud computers that were deleted are not returned.
     *
     * @example true
     *
     * @var bool
     */
    public $ignoreDeleted;

    /**
     * @description The maximum number of entries per page.
     *
     *   Default value: 10.
     *   Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The billing method of the cloud computer share.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'customEndTimePeriod' => 'CustomEndTimePeriod',
        'customStartTimePeriod' => 'CustomStartTimePeriod',
        'desktopGroupId' => 'DesktopGroupId',
        'ignoreDeleted' => 'IgnoreDeleted',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customEndTimePeriod) {
            $res['CustomEndTimePeriod'] = $this->customEndTimePeriod;
        }
        if (null !== $this->customStartTimePeriod) {
            $res['CustomStartTimePeriod'] = $this->customStartTimePeriod;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->ignoreDeleted) {
            $res['IgnoreDeleted'] = $this->ignoreDeleted;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopsInGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomEndTimePeriod'])) {
            $model->customEndTimePeriod = $map['CustomEndTimePeriod'];
        }
        if (isset($map['CustomStartTimePeriod'])) {
            $model->customStartTimePeriod = $map['CustomStartTimePeriod'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['IgnoreDeleted'])) {
            $model->ignoreDeleted = $map['IgnoreDeleted'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
