<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class ScrollDomainListRequest extends Model
{
    /**
     * @description The ID of the domain name group. You can call the [QueryDomainGroupList](https://help.aliyun.com/document_detail/69362.html) operation to obtain the ID of the domain name group.
     *
     * @example 123456
     *
     * @var int
     */
    public $domainGroupId;

    /**
     * @description The status of the domain name. Valid values:
     *
     *   **0**: All.
     *   **1**: The domain name needs to be renewed.
     *   **2**: The domain name needs to be redeemed.
     *   **3**: The domain name is normal.
     *   **4**: The domain name is being transferred from Alibaba Cloud.
     *   **5**: The information about the domain name registrant is being modified.
     *   **6**: Real-name verification is not performed on the domain name.
     *   **7**: Real-name verification for the domain name fails. Real-name reverification is required.
     *   **8**: The domain name is being reviewed.
     *
     * @example 0
     *
     * @var int
     */
    public $domainStatus;

    /**
     * @description The end of the time range to query domain names based on expiration dates. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1541520000000
     *
     * @var int
     */
    public $endExpirationDate;

    /**
     * @description The end of domain name length to query.
     *
     * @example 3
     *
     * @var int
     */
    public $endLength;

    /**
     * @description The end of the time range to query domain names based on registration dates. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1541520000000
     *
     * @var int
     */
    public $endRegistrationDate;

    /**
     * @description The keyword that is used to exclude domain names.
     *
     * @example test
     *
     * @var string
     */
    public $excluded;

    /**
     * @description Specifies whether to exclude the prefix keyword.
     *
     * @example false
     *
     * @var bool
     */
    public $excludedPrefix;

    /**
     * @description Specifies whether to exclude the suffix keyword.
     *
     * @example true
     *
     * @var bool
     */
    public $excludedSuffix;

    /**
     * @description The composition of the domain name.
     *
     * @example 1
     *
     * @var int
     */
    public $form;

    /**
     * @description The keyword.
     *
     * @example test
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description Specifies whether the keyword is the prefix.
     *
     * @example true
     *
     * @var bool
     */
    public $keyWordPrefix;

    /**
     * @description Specifies whether the keyword is the suffix.
     *
     * @example false
     *
     * @var bool
     */
    public $keyWordSuffix;

    /**
     * @description The language of the error message to return if the request fails. Valid values:
     *
     *   **zh**: Chinese.
     *   **en**: English.
     *
     * Default value: **en**.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   **New gTLD**
     *   **gTLD**
     *   **ccTLD**
     *   **other**
     *
     * @example gTLD
     *
     * @var string
     */
    public $productDomainType;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmw6bpc6n7zai
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The scroll ID. This parameter is a technical parameter.
     *
     * @example test
     *
     * @var string
     */
    public $scrollId;

    /**
     * @description The beginning of the time range to query domain names based on expiration dates. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1541520000000
     *
     * @var int
     */
    public $startExpirationDate;

    /**
     * @description The start of the domain name length to query.
     *
     * @example 0
     *
     * @var int
     */
    public $startLength;

    /**
     * @description The beginning of the time range to query domain names based on registration dates. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1541520000000
     *
     * @var int
     */
    public $startRegistrationDate;

    /**
     * @description The suffixes of domain names to be queried. Separate multiple suffixes with commas (,).
     *
     * @example com
     *
     * @var string
     */
    public $suffixs;

    /**
     * @description The publishing status of the domain name. Valid values:
     *
     *   **2**: The domain name is published at a fixed price.
     *   **3**: The domain name is published with the price negotiable.
     *   **4**: The domain name is published for bidding.
     *   **6**: The domain name is published with price push.
     *   **-1**: The domain name is not published.
     *
     * @example -1
     *
     * @var int
     */
    public $tradeType;

    /**
     * @description The IP address of the client. Set the value to **127.0.0.1**.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainGroupId'         => 'DomainGroupId',
        'domainStatus'          => 'DomainStatus',
        'endExpirationDate'     => 'EndExpirationDate',
        'endLength'             => 'EndLength',
        'endRegistrationDate'   => 'EndRegistrationDate',
        'excluded'              => 'Excluded',
        'excludedPrefix'        => 'ExcludedPrefix',
        'excludedSuffix'        => 'ExcludedSuffix',
        'form'                  => 'Form',
        'keyWord'               => 'KeyWord',
        'keyWordPrefix'         => 'KeyWordPrefix',
        'keyWordSuffix'         => 'KeyWordSuffix',
        'lang'                  => 'Lang',
        'pageSize'              => 'PageSize',
        'productDomainType'     => 'ProductDomainType',
        'resourceGroupId'       => 'ResourceGroupId',
        'scrollId'              => 'ScrollId',
        'startExpirationDate'   => 'StartExpirationDate',
        'startLength'           => 'StartLength',
        'startRegistrationDate' => 'StartRegistrationDate',
        'suffixs'               => 'Suffixs',
        'tradeType'             => 'TradeType',
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
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->endExpirationDate) {
            $res['EndExpirationDate'] = $this->endExpirationDate;
        }
        if (null !== $this->endLength) {
            $res['EndLength'] = $this->endLength;
        }
        if (null !== $this->endRegistrationDate) {
            $res['EndRegistrationDate'] = $this->endRegistrationDate;
        }
        if (null !== $this->excluded) {
            $res['Excluded'] = $this->excluded;
        }
        if (null !== $this->excludedPrefix) {
            $res['ExcludedPrefix'] = $this->excludedPrefix;
        }
        if (null !== $this->excludedSuffix) {
            $res['ExcludedSuffix'] = $this->excludedSuffix;
        }
        if (null !== $this->form) {
            $res['Form'] = $this->form;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->keyWordPrefix) {
            $res['KeyWordPrefix'] = $this->keyWordPrefix;
        }
        if (null !== $this->keyWordSuffix) {
            $res['KeyWordSuffix'] = $this->keyWordSuffix;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productDomainType) {
            $res['ProductDomainType'] = $this->productDomainType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scrollId) {
            $res['ScrollId'] = $this->scrollId;
        }
        if (null !== $this->startExpirationDate) {
            $res['StartExpirationDate'] = $this->startExpirationDate;
        }
        if (null !== $this->startLength) {
            $res['StartLength'] = $this->startLength;
        }
        if (null !== $this->startRegistrationDate) {
            $res['StartRegistrationDate'] = $this->startRegistrationDate;
        }
        if (null !== $this->suffixs) {
            $res['Suffixs'] = $this->suffixs;
        }
        if (null !== $this->tradeType) {
            $res['TradeType'] = $this->tradeType;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScrollDomainListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainGroupId'])) {
            $model->domainGroupId = $map['DomainGroupId'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['EndExpirationDate'])) {
            $model->endExpirationDate = $map['EndExpirationDate'];
        }
        if (isset($map['EndLength'])) {
            $model->endLength = $map['EndLength'];
        }
        if (isset($map['EndRegistrationDate'])) {
            $model->endRegistrationDate = $map['EndRegistrationDate'];
        }
        if (isset($map['Excluded'])) {
            $model->excluded = $map['Excluded'];
        }
        if (isset($map['ExcludedPrefix'])) {
            $model->excludedPrefix = $map['ExcludedPrefix'];
        }
        if (isset($map['ExcludedSuffix'])) {
            $model->excludedSuffix = $map['ExcludedSuffix'];
        }
        if (isset($map['Form'])) {
            $model->form = $map['Form'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['KeyWordPrefix'])) {
            $model->keyWordPrefix = $map['KeyWordPrefix'];
        }
        if (isset($map['KeyWordSuffix'])) {
            $model->keyWordSuffix = $map['KeyWordSuffix'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductDomainType'])) {
            $model->productDomainType = $map['ProductDomainType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ScrollId'])) {
            $model->scrollId = $map['ScrollId'];
        }
        if (isset($map['StartExpirationDate'])) {
            $model->startExpirationDate = $map['StartExpirationDate'];
        }
        if (isset($map['StartLength'])) {
            $model->startLength = $map['StartLength'];
        }
        if (isset($map['StartRegistrationDate'])) {
            $model->startRegistrationDate = $map['StartRegistrationDate'];
        }
        if (isset($map['Suffixs'])) {
            $model->suffixs = $map['Suffixs'];
        }
        if (isset($map['TradeType'])) {
            $model->tradeType = $map['TradeType'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
