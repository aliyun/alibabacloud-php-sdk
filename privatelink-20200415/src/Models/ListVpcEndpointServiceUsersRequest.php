<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class ListVpcEndpointServiceUsersRequest extends Model
{
    /**
     * @description The number of entries to return on each page. Valid values: **1 to 50**. Default value: **50**.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   If this is your first request and no next requests are to be performed, you do not need to specify this parameter.
     *   If a next request is to be performed, set the value to the value of **NextToken** that is returned from the last call.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the endpoint service that you want to query.
     *
     * You can call the [DescribeRegions](~~120468~~) operation to query the most recent region list.
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The endpoint service ID.
     *
     * @example epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The ID of the Alibaba Cloud account in the whitelist of the endpoint service.
     *
     * @example 12345678
     *
     * @var int
     */
    public $userId;

    /**
     * @description The type of the user list in the whitelist of the endpoint service.
     *
     * @example Users
     *
     * @var string
     */
    public $userListType;
    protected $_name = [
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'regionId'     => 'RegionId',
        'serviceId'    => 'ServiceId',
        'userId'       => 'UserId',
        'userListType' => 'UserListType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userListType) {
            $res['UserListType'] = $this->userListType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcEndpointServiceUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserListType'])) {
            $model->userListType = $map['UserListType'];
        }

        return $model;
    }
}
