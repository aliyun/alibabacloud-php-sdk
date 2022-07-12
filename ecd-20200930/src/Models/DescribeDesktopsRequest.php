<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDesktopsRequest extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $desktopStatus;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string[]
     */
    public $endUserId;

    /**
     * @var string[]
     */
    public $excludedEndUserId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var bool
     */
    public $filterDesktopGroup;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $managementFlag;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var bool
     */
    public $queryFotaUpdate;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'chargeType'         => 'ChargeType',
        'desktopId'          => 'DesktopId',
        'desktopName'        => 'DesktopName',
        'desktopStatus'      => 'DesktopStatus',
        'directoryId'        => 'DirectoryId',
        'endUserId'          => 'EndUserId',
        'excludedEndUserId'  => 'ExcludedEndUserId',
        'expiredTime'        => 'ExpiredTime',
        'filterDesktopGroup' => 'FilterDesktopGroup',
        'groupId'            => 'GroupId',
        'managementFlag'     => 'ManagementFlag',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'officeSiteId'       => 'OfficeSiteId',
        'officeSiteName'     => 'OfficeSiteName',
        'policyGroupId'      => 'PolicyGroupId',
        'protocolType'       => 'ProtocolType',
        'queryFotaUpdate'    => 'QueryFotaUpdate',
        'regionId'           => 'RegionId',
        'tag'                => 'Tag',
        'userName'           => 'UserName',
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
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->excludedEndUserId) {
            $res['ExcludedEndUserId'] = $this->excludedEndUserId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->filterDesktopGroup) {
            $res['FilterDesktopGroup'] = $this->filterDesktopGroup;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->managementFlag) {
            $res['ManagementFlag'] = $this->managementFlag;
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
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->queryFotaUpdate) {
            $res['QueryFotaUpdate'] = $this->queryFotaUpdate;
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
     * @return DescribeDesktopsRequest
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = $map['EndUserId'];
            }
        }
        if (isset($map['ExcludedEndUserId'])) {
            if (!empty($map['ExcludedEndUserId'])) {
                $model->excludedEndUserId = $map['ExcludedEndUserId'];
            }
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FilterDesktopGroup'])) {
            $model->filterDesktopGroup = $map['FilterDesktopGroup'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ManagementFlag'])) {
            $model->managementFlag = $map['ManagementFlag'];
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
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['QueryFotaUpdate'])) {
            $model->queryFotaUpdate = $map['QueryFotaUpdate'];
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
