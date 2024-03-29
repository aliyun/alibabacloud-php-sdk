<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopListInfoRequest\tag;
use AlibabaCloud\Tea\Model;

class ExportDesktopListInfoRequest extends Model
{
    /**
     * @description The billing method of the cloud desktop. Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * Default value: PostPaid.
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The ID of the cloud desktop.
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The name of the cloud desktop.
     *
     * @example testName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The status of the cloud desktop. Valid values:
     *
     *   Pending
     *   Starting
     *   Running
     *   Stopping
     *   Rebuilding
     *   Stopped
     *   Expired
     *   Deleted
     *
     * @example Running
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @var string[]
     */
    public $endUserId;

    /**
     * @description The time when the subscription cloud desktop expires.
     *
     * @example 2022-12-31T15:59Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The ID of the group to which the cloud desktop belongs.
     *
     * @example dg-boyczi8enfyc5***
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The language that you want to use.
     *
     * @example `zh-CN`
     *
     * @var string
     */
    public $langType;

    /**
     * @description The maximum number of entries to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for the next query. If this parameter is empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the policy that is associated with the cloud desktop.
     *
     * @example system-all-enabled-policy
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tags that you want to add to the cloud desktop.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The username of the current user of the cloud desktop.
     *
     * @example alice
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'chargeType'    => 'ChargeType',
        'desktopId'     => 'DesktopId',
        'desktopName'   => 'DesktopName',
        'desktopStatus' => 'DesktopStatus',
        'endUserId'     => 'EndUserId',
        'expiredTime'   => 'ExpiredTime',
        'groupId'       => 'GroupId',
        'langType'      => 'LangType',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'officeSiteId'  => 'OfficeSiteId',
        'policyGroupId' => 'PolicyGroupId',
        'regionId'      => 'RegionId',
        'tag'           => 'Tag',
        'userName'      => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->langType) {
            $res['LangType'] = $this->langType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportDesktopListInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = $map['EndUserId'];
            }
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['LangType'])) {
            $model->langType = $map['LangType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
