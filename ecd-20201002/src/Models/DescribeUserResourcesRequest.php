<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var bool
     */
    public $autoRefresh;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $categoryType;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientType;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var bool
     */
    public $dualCenterForward;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $loginRegionId;

    /**
     * @var string
     */
    public $loginToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $officeSiteIds;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string[]
     */
    public $productTypes;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var bool
     */
    public $queryFotaUpdate;

    /**
     * @var bool
     */
    public $refreshFotaUpdate;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string[]
     */
    public $resourceTypes;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $searchRegionId;

    /**
     * @var string
     */
    public $sessionId;

    /**
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

    public function validate()
    {
        if (\is_array($this->officeSiteIds)) {
            Model::validateArray($this->officeSiteIds);
        }
        if (\is_array($this->productTypes)) {
            Model::validateArray($this->productTypes);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        if (\is_array($this->resourceTypes)) {
            Model::validateArray($this->resourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->officeSiteIds)) {
                $res['OfficeSiteIds'] = [];
                $n1 = 0;
                foreach ($this->officeSiteIds as $item1) {
                    $res['OfficeSiteIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->productTypes) {
            if (\is_array($this->productTypes)) {
                $res['ProductTypes'] = [];
                $n1 = 0;
                foreach ($this->productTypes as $item1) {
                    $res['ProductTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['ResourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceTypes) {
            if (\is_array($this->resourceTypes)) {
                $res['ResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->resourceTypes as $item1) {
                    $res['ResourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->officeSiteIds = [];
                $n1 = 0;
                foreach ($map['OfficeSiteIds'] as $item1) {
                    $model->officeSiteIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['ProductTypes'])) {
            if (!empty($map['ProductTypes'])) {
                $model->productTypes = [];
                $n1 = 0;
                foreach ($map['ProductTypes'] as $item1) {
                    $model->productTypes[$n1] = $item1;
                    ++$n1;
                }
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
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['ResourceIds'] as $item1) {
                    $model->resourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = [];
                $n1 = 0;
                foreach ($map['ResourceTypes'] as $item1) {
                    $model->resourceTypes[$n1] = $item1;
                    ++$n1;
                }
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
