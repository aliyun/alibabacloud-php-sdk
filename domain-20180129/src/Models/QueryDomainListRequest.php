<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainListRequest\tag;
use AlibabaCloud\Tea\Model;

class QueryDomainListRequest extends Model
{
    /**
     * @description The name of the domain name registrant.
     *
     * @example Guangzhou Jinye Renewable Resources Recycling Co., Ltd
     *
     * @var string
     */
    public $ccompany;

    /**
     * @description The ID of the domain name group.
     *
     * @example 123456
     *
     * @var string
     */
    public $domainGroupId;

    /**
     * @description The domain name that you want to search for.
     *
     * @example test.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query domain names based on expiration dates. Set the value to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. Only queries by day are supported.
     *
     * @example 1522080000000
     *
     * @var int
     */
    public $endExpirationDate;

    /**
     * @description The end of the time range to query domain names based on registration dates. Set the value to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. Only queries by day are supported.
     *
     * @example 1522080000000
     *
     * @var int
     */
    public $endRegistrationDate;

    /**
     * @description The language of the error message to return if the request fails. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * Default value: **en**.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The order of the information based on which the domain names are sorted, such as the registration date and expiration date. Valid values:
     *
     *   **ASC**: ascending order
     *   **DESC**: descending order
     *
     * >  If this parameter is not specified, the default value **DESC** is used.
     * @example ASC
     *
     * @var string
     */
    public $orderByType;

    /**
     * @description The field that you use to sort the domain names. Valid values:
     *
     *   **RegistrationDate**: registration date
     *   **ExpirationDate**: expiration date
     *
     * >  If this parameter is not specified, the domain names are sorted by the time when they were added to the database.
     * @example RegistrationDate
     *
     * @var string
     */
    public $orderKeyType;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   **New gTLD**: new generic top-level domain names
     *   **gTLD**: generic top-level domain names
     *   **ccTLD**: country code top-level domain names
     *
     * @example New gTLD
     *
     * @var string
     */
    public $productDomainType;

    /**
     * @description The category of the domain names that you want to query. Valid values:
     *
     *   **1**: the domain names that need to be renewed
     *   **2**: the domain names that need to be redeemed
     *
     * @example 1
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2indvyxgpfti
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The beginning of the time range to query domain names based on expiration dates. Set the value to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. Only queries by day are supported.
     *
     * @example 1522080000000
     *
     * @var int
     */
    public $startExpirationDate;

    /**
     * @description The beginning of the time range to query domain names based on registration dates. Set the value to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. Only queries by day are supported.
     *
     * @example 1522080000000
     *
     * @var int
     */
    public $startRegistrationDate;

    /**
     * @description The tags to add to the resource.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The IP address of the client. Set the value to **127.0.0.1**.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'ccompany'              => 'Ccompany',
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
        if (null !== $this->ccompany) {
            $res['Ccompany'] = $this->ccompany;
        }
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
        if (isset($map['Ccompany'])) {
            $model->ccompany = $map['Ccompany'];
        }
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
