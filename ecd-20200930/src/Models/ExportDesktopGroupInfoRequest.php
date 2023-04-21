<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ExportDesktopGroupInfoRequest extends Model
{
    /**
     * @description The billing method of cloud desktops in a desktop group.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The IDs of the desktop groups. You can specify 1 to 100 desktop groups.
     *
     * @var string[]
     */
    public $desktopGroupId;

    /**
     * @description The name of the desktop group.
     *
     * @example test
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description The IDs of the users authorized to use the desktop group. You can specify 1 to 100 users.
     *
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
     * @description The language that you want to use.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $langType;

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
     * @description The token that determines the start point of the next query. If this parameter is empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the workspace to which the desktop group belongs.
     *
     * @example cn-hangzhou+dir-467671****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of policy with which the desktop group is associated.
     *
     * @example pg-53iyi2aar0nd6****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'chargeType'       => 'ChargeType',
        'desktopGroupId'   => 'DesktopGroupId',
        'desktopGroupName' => 'DesktopGroupName',
        'endUserId'        => 'EndUserId',
        'expiredTime'      => 'ExpiredTime',
        'langType'         => 'LangType',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'officeSiteId'     => 'OfficeSiteId',
        'policyGroupId'    => 'PolicyGroupId',
        'regionId'         => 'RegionId',
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
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportDesktopGroupInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DesktopGroupId'])) {
            if (!empty($map['DesktopGroupId'])) {
                $model->desktopGroupId = $map['DesktopGroupId'];
            }
        }
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = $map['EndUserId'];
            }
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
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

        return $model;
    }
}
