<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserResourcesRequest extends Model
{
    /**
     * @example INTERNET
     *
     * @var string
     */
    public $accessType;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoRefresh;

    /**
     * @example 0
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example 1
     *
     * @var int
     */
    public $categoryType;

    /**
     * @description This parameter is required.
     *
     * @example 54c17e1d-2d72-4b87-aa33-25f3b3f2****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example windows
     *
     * @var string
     */
    public $clientType;

    /**
     * @example 7.6.0-R-20241112.222305
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example false
     *
     * @var bool
     */
    public $dualCenterForward;

    /**
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $loginRegionId;

    /**
     * @description This parameter is required.
     *
     * @example v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****
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
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $officeSiteIds;

    /**
     * @example AssignTime
     *
     * @var string
     */
    public $orderBy;

    /**
     * @var string[]
     */
    public $productTypes;

    /**
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @example false
     *
     * @var bool
     */
    public $queryFotaUpdate;

    /**
     * @example false
     *
     * @var bool
     */
    public $refreshFotaUpdate;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @example testName
     *
     * @var string
     */
    public $resourceName;

    /**
     * @var string[]
     */
    public $resourceTypes;

    /**
     * @example desktop
     *
     * @var string
     */
    public $scene;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $searchRegionId;

    /**
     * @example cd45e873-650d-4d70-acb9-f996187a****
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
    protected $_name = [
        'accessType' => 'AccessType',
        'autoRefresh' => 'AutoRefresh',
        'categoryId' => 'CategoryId',
        'categoryType' => 'CategoryType',
        'clientId' => 'ClientId',
        'clientType' => 'ClientType',
        'clientVersion' => 'ClientVersion',
        'dualCenterForward' => 'DualCenterForward',
        'language' => 'Language',
        'loginRegionId' => 'LoginRegionId',
        'loginToken' => 'LoginToken',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'officeSiteIds' => 'OfficeSiteIds',
        'orderBy' => 'OrderBy',
        'productTypes' => 'ProductTypes',
        'protocolType' => 'ProtocolType',
        'queryFotaUpdate' => 'QueryFotaUpdate',
        'refreshFotaUpdate' => 'RefreshFotaUpdate',
        'resourceIds' => 'ResourceIds',
        'resourceName' => 'ResourceName',
        'resourceTypes' => 'ResourceTypes',
        'scene' => 'Scene',
        'searchRegionId' => 'SearchRegionId',
        'sessionId' => 'SessionId',
        'sortType' => 'SortType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->autoRefresh) {
            $res['AutoRefresh'] = $this->autoRefresh;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->dualCenterForward) {
            $res['DualCenterForward'] = $this->dualCenterForward;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
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
        if (null !== $this->officeSiteIds) {
            $res['OfficeSiteIds'] = $this->officeSiteIds;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->productTypes) {
            $res['ProductTypes'] = $this->productTypes;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->queryFotaUpdate) {
            $res['QueryFotaUpdate'] = $this->queryFotaUpdate;
        }
        if (null !== $this->refreshFotaUpdate) {
            $res['RefreshFotaUpdate'] = $this->refreshFotaUpdate;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['AutoRefresh'])) {
            $model->autoRefresh = $map['AutoRefresh'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['DualCenterForward'])) {
            $model->dualCenterForward = $map['DualCenterForward'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
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
        if (isset($map['OfficeSiteIds'])) {
            if (!empty($map['OfficeSiteIds'])) {
                $model->officeSiteIds = $map['OfficeSiteIds'];
            }
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['ProductTypes'])) {
            if (!empty($map['ProductTypes'])) {
                $model->productTypes = $map['ProductTypes'];
            }
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['QueryFotaUpdate'])) {
            $model->queryFotaUpdate = $map['QueryFotaUpdate'];
        }
        if (isset($map['RefreshFotaUpdate'])) {
            $model->refreshFotaUpdate = $map['RefreshFotaUpdate'];
        }
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = $map['ResourceTypes'];
            }
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
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

        return $model;
    }
}
