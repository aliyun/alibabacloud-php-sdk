<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryAdvancedDomainListRequest\tag;
use AlibabaCloud\Tea\Model;

class QueryAdvancedDomainListRequest extends Model
{
    /**
     * @example -1
     *
     * @var int
     */
    public $domainGroupId;

    /**
     * @example false
     *
     * @var bool
     */
    public $domainNameSort;

    /**
     * @example 1
     *
     * @var int
     */
    public $domainStatus;

    /**
     * @example 1522080000000
     *
     * @var int
     */
    public $endExpirationDate;

    /**
     * @example 5
     *
     * @var int
     */
    public $endLength;

    /**
     * @example 1522080000000
     *
     * @var int
     */
    public $endRegistrationDate;

    /**
     * @example test
     *
     * @var string
     */
    public $excluded;

    /**
     * @example false
     *
     * @var bool
     */
    public $excludedPrefix;

    /**
     * @example false
     *
     * @var bool
     */
    public $excludedSuffix;

    /**
     * @example false
     *
     * @var bool
     */
    public $expirationDateSort;

    /**
     * @example 1
     *
     * @var int
     */
    public $form;

    /**
     * @var bool
     */
    public $isPremiumDomain;

    /**
     * @example test
     *
     * @var string
     */
    public $keyWord;

    /**
     * @example false
     *
     * @var bool
     */
    public $keyWordPrefix;

    /**
     * @example true
     *
     * @var bool
     */
    public $keyWordSuffix;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example gTLD
     *
     * @var string
     */
    public $productDomainType;

    /**
     * @example false
     *
     * @var bool
     */
    public $productDomainTypeSort;

    /**
     * @example false
     *
     * @var bool
     */
    public $registrationDateSort;

    /**
     * @example rg-acfmw6bpc6n7zai
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
     * @example 5
     *
     * @var int
     */
    public $startLength;

    /**
     * @example 1522080000000
     *
     * @var int
     */
    public $startRegistrationDate;

    /**
     * @example com.cn
     *
     * @var string
     */
    public $suffixs;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example -1
     *
     * @var int
     */
    public $tradeType;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainGroupId'         => 'DomainGroupId',
        'domainNameSort'        => 'DomainNameSort',
        'domainStatus'          => 'DomainStatus',
        'endExpirationDate'     => 'EndExpirationDate',
        'endLength'             => 'EndLength',
        'endRegistrationDate'   => 'EndRegistrationDate',
        'excluded'              => 'Excluded',
        'excludedPrefix'        => 'ExcludedPrefix',
        'excludedSuffix'        => 'ExcludedSuffix',
        'expirationDateSort'    => 'ExpirationDateSort',
        'form'                  => 'Form',
        'isPremiumDomain'       => 'IsPremiumDomain',
        'keyWord'               => 'KeyWord',
        'keyWordPrefix'         => 'KeyWordPrefix',
        'keyWordSuffix'         => 'KeyWordSuffix',
        'lang'                  => 'Lang',
        'pageNum'               => 'PageNum',
        'pageSize'              => 'PageSize',
        'productDomainType'     => 'ProductDomainType',
        'productDomainTypeSort' => 'ProductDomainTypeSort',
        'registrationDateSort'  => 'RegistrationDateSort',
        'resourceGroupId'       => 'ResourceGroupId',
        'startExpirationDate'   => 'StartExpirationDate',
        'startLength'           => 'StartLength',
        'startRegistrationDate' => 'StartRegistrationDate',
        'suffixs'               => 'Suffixs',
        'tag'                   => 'Tag',
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
        if (null !== $this->domainNameSort) {
            $res['DomainNameSort'] = $this->domainNameSort;
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
        if (null !== $this->expirationDateSort) {
            $res['ExpirationDateSort'] = $this->expirationDateSort;
        }
        if (null !== $this->form) {
            $res['Form'] = $this->form;
        }
        if (null !== $this->isPremiumDomain) {
            $res['IsPremiumDomain'] = $this->isPremiumDomain;
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
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productDomainType) {
            $res['ProductDomainType'] = $this->productDomainType;
        }
        if (null !== $this->productDomainTypeSort) {
            $res['ProductDomainTypeSort'] = $this->productDomainTypeSort;
        }
        if (null !== $this->registrationDateSort) {
            $res['RegistrationDateSort'] = $this->registrationDateSort;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return QueryAdvancedDomainListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainGroupId'])) {
            $model->domainGroupId = $map['DomainGroupId'];
        }
        if (isset($map['DomainNameSort'])) {
            $model->domainNameSort = $map['DomainNameSort'];
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
        if (isset($map['ExpirationDateSort'])) {
            $model->expirationDateSort = $map['ExpirationDateSort'];
        }
        if (isset($map['Form'])) {
            $model->form = $map['Form'];
        }
        if (isset($map['IsPremiumDomain'])) {
            $model->isPremiumDomain = $map['IsPremiumDomain'];
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
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductDomainType'])) {
            $model->productDomainType = $map['ProductDomainType'];
        }
        if (isset($map['ProductDomainTypeSort'])) {
            $model->productDomainTypeSort = $map['ProductDomainTypeSort'];
        }
        if (isset($map['RegistrationDateSort'])) {
            $model->registrationDateSort = $map['RegistrationDateSort'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
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
