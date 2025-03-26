<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeUsersInGroupRequest extends Model
{
    /**
     * @var int
     */
    public $connectState;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string
     */
    public $filter;

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
    public $orgId;

    /**
     * @var bool
     */
    public $queryUserDetail;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'connectState' => 'ConnectState',
        'desktopGroupId' => 'DesktopGroupId',
        'endUserId' => 'EndUserId',
        'endUserIds' => 'EndUserIds',
        'filter' => 'Filter',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orgId' => 'OrgId',
        'queryUserDetail' => 'QueryUserDetail',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1 = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->endUserIds = [];
                $n1 = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1++] = $item1;
                }
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
