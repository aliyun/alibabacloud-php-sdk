<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeApisRequest extends Model
{
    /**
     * @description The API ID.
     *
     * @example f68c19ee3bd1478fb58aa05ce8ae9b5a
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The HTTP method of the API request.
     *
     * @example GET
     *
     * @var string
     */
    public $apiMethod;

    /**
     * @description The API name. The name is used for fuzzy match.
     *
     * @example weather
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The request path of the API.
     *
     * @example /illegal/query
     *
     * @var string
     */
    public $apiPath;

    /**
     * @description The category ID.
     *
     * @example 1553414085247362
     *
     * @var string
     */
    public $catalogId;

    /**
     * @description Specifies whether to enable tag verification.
     *
     * @example true
     *
     * @var bool
     */
    public $enableTagAuth;

    /**
     * @description The API group ID.
     *
     * @example c4a4d2de657548a2bd485d5d4df42b4a
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @description The tags of objects that match the rule.
     *
     * @example Key， Value
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies whether to filter unpublished APIs.
     *
     * @example true
     *
     * @var bool
     */
    public $unDeployed;

    /**
     * @description Specifies whether the API is public. Valid values:
     *
     *   **PUBLIC**: The API is public. If you publish the definition of a public API to the production environment, the definition is displayed on the APIs page for all users.
     *   **PRIVATE**: The API is private. If you publish an API group that contains a private API in Alibaba Cloud Marketplace, the API is not displayed in Alibaba Cloud Marketplace.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;
    protected $_name = [
        'apiId'         => 'ApiId',
        'apiMethod'     => 'ApiMethod',
        'apiName'       => 'ApiName',
        'apiPath'       => 'ApiPath',
        'catalogId'     => 'CatalogId',
        'enableTagAuth' => 'EnableTagAuth',
        'groupId'       => 'GroupId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'securityToken' => 'SecurityToken',
        'stageName'     => 'StageName',
        'tag'           => 'Tag',
        'unDeployed'    => 'UnDeployed',
        'visibility'    => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiMethod) {
            $res['ApiMethod'] = $this->apiMethod;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->enableTagAuth) {
            $res['EnableTagAuth'] = $this->enableTagAuth;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (null !== $this->unDeployed) {
            $res['UnDeployed'] = $this->unDeployed;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiMethod'])) {
            $model->apiMethod = $map['ApiMethod'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['EnableTagAuth'])) {
            $model->enableTagAuth = $map['EnableTagAuth'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
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
        if (isset($map['UnDeployed'])) {
            $model->unDeployed = $map['UnDeployed'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
