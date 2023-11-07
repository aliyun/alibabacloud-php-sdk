<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainListRequest\tag;
use AlibabaCloud\Tea\Model;

class QueryDomainListRequest extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $domainGroupId;

    /**
     * @example test.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 1522080000000
     *
     * @var int
     */
    public $endExpirationDate;

    /**
     * @example 1522080000000
     *
     * @var int
     */
    public $endRegistrationDate;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example ASC
     *
     * @var string
     */
    public $orderByType;

    /**
     * @example RegistrationDate
     *
     * @var string
     */
    public $orderKeyType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example New gTLD
     *
     * @var string
     */
    public $productDomainType;

    /**
     * @example 1
     *
     * @var string
     */
    public $queryType;

    /**
     * @example rg-aek2indvyxgpfti
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 1522080000000
     *
     * @var int
     */
    public $startExpirationDate;

    /**
     * @example 1522080000000
     *
     * @var int
     */
    public $startRegistrationDate;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainGroupId'         => 'DomainGroupId',
        'domainName'            => 'DomainName',
        'endExpirationDate'     => 'EndExpirationDate',
        'endRegistrationDate'   => 'EndRegistrationDate',
        'lang'                  => 'Lang',
        'orderByType'           => 'OrderByType',
        'orderKeyType'          => 'OrderKeyType',
        'pageNum'               => 'PageNum',
        'pageSize'              => 'PageSize',
        'productDomainType'     => 'ProductDomainType',
        'queryType'             => 'QueryType',
        'resourceGroupId'       => 'ResourceGroupId',
        'startExpirationDate'   => 'StartExpirationDate',
        'startRegistrationDate' => 'StartRegistrationDate',
        'tag'                   => 'Tag',
        'userClientIp'          => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainGroupId) {
            $res['DomainGroupId'] = $this->domainGroupId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endExpirationDate) {
            $res['EndExpirationDate'] = $this->endExpirationDate;
        }
        if (null !== $this->endRegistrationDate) {
            $res['EndRegistrationDate'] = $this->endRegistrationDate;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->orderByType) {
            $res['OrderByType'] = $this->orderByType;
        }
        if (null !== $this->orderKeyType) {
            $res['OrderKeyType'] = $this->orderKeyType;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productDomainType) {
            $res['ProductDomainType'] = $this->productDomainType;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startExpirationDate) {
            $res['StartExpirationDate'] = $this->startExpirationDate;
        }
        if (null !== $this->startRegistrationDate) {
            $res['StartRegistrationDate'] = $this->startRegistrationDate;
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
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainGroupId'])) {
            $model->domainGroupId = $map['DomainGroupId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndExpirationDate'])) {
            $model->endExpirationDate = $map['EndExpirationDate'];
        }
        if (isset($map['EndRegistrationDate'])) {
            $model->endRegistrationDate = $map['EndRegistrationDate'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OrderByType'])) {
            $model->orderByType = $map['OrderByType'];
        }
        if (isset($map['OrderKeyType'])) {
            $model->orderKeyType = $map['OrderKeyType'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductDomainType'])) {
            $model->productDomainType = $map['ProductDomainType'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartExpirationDate'])) {
            $model->startExpirationDate = $map['StartExpirationDate'];
        }
        if (isset($map['StartRegistrationDate'])) {
            $model->startRegistrationDate = $map['StartRegistrationDate'];
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
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
