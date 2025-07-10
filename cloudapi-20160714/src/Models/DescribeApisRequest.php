<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisRequest\tag;

class DescribeApisRequest extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiMethod;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiPath;

    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var bool
     */
    public $enableTagAuth;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
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
     * @var tag[]
     */
    public $tag;

    /**
     * @var bool
     */
    public $unDeployed;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiMethod' => 'ApiMethod',
        'apiName' => 'ApiName',
        'apiPath' => 'ApiPath',
        'catalogId' => 'CatalogId',
        'enableTagAuth' => 'EnableTagAuth',
        'groupId' => 'GroupId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'securityToken' => 'SecurityToken',
        'stageName' => 'StageName',
        'tag' => 'Tag',
        'unDeployed' => 'UnDeployed',
        'visibility' => 'Visibility',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
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
