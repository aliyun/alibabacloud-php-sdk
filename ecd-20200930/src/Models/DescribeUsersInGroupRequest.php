<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeUsersInGroupRequest extends Model
{
    /**
     * @description The status of the desktop connection for the end user.
     *
     * - 1: Connected.
     * @example 1
     *
     * @var int
     */
    public $connectState;

    /**
     * @description The ID of the cloud computer pool.
     *
     * This parameter is required.
     * @example dg-8ttn55ujj8nj8****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The ID of the authorized user.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The IDs of the authorized users.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The query string for fuzzy match. If you specify this parameter, the system returns all results that contain the string.
     *
     * @example alice
     *
     * @var string
     */
    public $filter;

    /**
     * @description The number of entries to return on each page.
     *
     *   Maximum value: 100.
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query. If this parameter is left empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the organization to which the end user belongs.
     *
     * @example org-d0fua2oyukw8j****
     *
     * @var string
     */
    public $orgId;

    /**
     * @description Specifies whether to query user details.
     *
     * Valid values:
     *
     *   true (default)
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $queryUserDetail;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'connectState'    => 'ConnectState',
        'desktopGroupId'  => 'DesktopGroupId',
        'endUserId'       => 'EndUserId',
        'endUserIds'      => 'EndUserIds',
        'filter'          => 'Filter',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'orgId'           => 'OrgId',
        'queryUserDetail' => 'QueryUserDetail',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectState) {
            $res['ConnectState'] = $this->connectState;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->queryUserDetail) {
            $res['QueryUserDetail'] = $this->queryUserDetail;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsersInGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectState'])) {
            $model->connectState = $map['ConnectState'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['QueryUserDetail'])) {
            $model->queryUserDetail = $map['QueryUserDetail'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
