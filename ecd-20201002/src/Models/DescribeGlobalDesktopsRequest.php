<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class DescribeGlobalDesktopsRequest extends Model
{
    /**
     * @example c213150d-7ac3-432c-b749-6e1e090b****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example INTERNET
     *
     * @var string
     */
    public $desktopAccessType;

    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @example DesktopTest
     *
     * @var string
     */
    public $desktopName;

    /**
     * @example Running
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @example cn-hangzhou+dir-880841****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description 关键字。支持模糊搜索桌面ID、云桌面名称和终端用户自定义的桌面名称。
     *
     * @example ecd
     *
     * @var string
     */
    public $keyword;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $loginRegionId;

    /**
     * @example v147c9114a180489f89691663893169****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example 500
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example eyJkZWZhdWx0IjpbIjk2MjEy****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example cn-hangzhou+dir-880841****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example AssignTime
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example true
     *
     * @var bool
     */
    public $queryFotaUpdate;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $searchRegionId;

    /**
     * @example 5c456a41-1e65-4e72-ab4d-5dcfff52****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example ASC
     *
     * @var string
     */
    public $sortType;

    /**
     * @example true
     *
     * @var bool
     */
    public $withoutLatency;
    protected $_name = [
        'clientId'          => 'ClientId',
        'desktopAccessType' => 'DesktopAccessType',
        'desktopId'         => 'DesktopId',
        'desktopName'       => 'DesktopName',
        'desktopStatus'     => 'DesktopStatus',
        'directoryId'       => 'DirectoryId',
        'keyword'           => 'Keyword',
        'loginRegionId'     => 'LoginRegionId',
        'loginToken'        => 'LoginToken',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'officeSiteId'      => 'OfficeSiteId',
        'orderBy'           => 'OrderBy',
        'queryFotaUpdate'   => 'QueryFotaUpdate',
        'regionId'          => 'RegionId',
        'searchRegionId'    => 'SearchRegionId',
        'sessionId'         => 'SessionId',
        'sortType'          => 'SortType',
        'withoutLatency'    => 'WithoutLatency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
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
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->loginRegionId) {
            $res['LoginRegionId'] = $this->loginRegionId;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
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
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->queryFotaUpdate) {
            $res['QueryFotaUpdate'] = $this->queryFotaUpdate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->searchRegionId) {
            $res['SearchRegionId'] = $this->searchRegionId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->withoutLatency) {
            $res['WithoutLatency'] = $this->withoutLatency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGlobalDesktopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
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
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['LoginRegionId'])) {
            $model->loginRegionId = $map['LoginRegionId'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
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
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['QueryFotaUpdate'])) {
            $model->queryFotaUpdate = $map['QueryFotaUpdate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SearchRegionId'])) {
            $model->searchRegionId = $map['SearchRegionId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['WithoutLatency'])) {
            $model->withoutLatency = $map['WithoutLatency'];
        }

        return $model;
    }
}
