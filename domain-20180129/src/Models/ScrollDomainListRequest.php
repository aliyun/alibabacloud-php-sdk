<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class ScrollDomainListRequest extends Model
{
    /**
     * @var int
     */
    public $endExpirationDate;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $startExpirationDate;

    /**
     * @var string
     */
    public $productDomainType;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $domainGroupId;

    /**
     * @var int
     */
    public $domainStatus;

    /**
     * @var int
     */
    public $endLength;

    /**
     * @var string
     */
    public $excluded;

    /**
     * @var bool
     */
    public $excludedPrefix;

    /**
     * @var bool
     */
    public $excludedSuffix;

    /**
     * @var int
     */
    public $form;

    /**
     * @var string
     */
    public $keyWord;

    /**
     * @var bool
     */
    public $keyWordPrefix;

    /**
     * @var bool
     */
    public $keyWordSuffix;

    /**
     * @var int
     */
    public $startLength;

    /**
     * @var int
     */
    public $tradeType;

    /**
     * @var string
     */
    public $suffixs;

    /**
     * @var int
     */
    public $startRegistrationDate;

    /**
     * @var int
     */
    public $endRegistrationDate;

    /**
     * @var string
     */
    public $scrollId;
    protected $_name = [
        'endExpirationDate'     => 'EndExpirationDate',
        'userClientIp'          => 'UserClientIp',
        'lang'                  => 'Lang',
        'startExpirationDate'   => 'StartExpirationDate',
        'productDomainType'     => 'ProductDomainType',
        'pageSize'              => 'PageSize',
        'domainGroupId'         => 'DomainGroupId',
        'domainStatus'          => 'DomainStatus',
        'endLength'             => 'EndLength',
        'excluded'              => 'Excluded',
        'excludedPrefix'        => 'ExcludedPrefix',
        'excludedSuffix'        => 'ExcludedSuffix',
        'form'                  => 'Form',
        'keyWord'               => 'KeyWord',
        'keyWordPrefix'         => 'KeyWordPrefix',
        'keyWordSuffix'         => 'KeyWordSuffix',
        'startLength'           => 'StartLength',
        'tradeType'             => 'TradeType',
        'suffixs'               => 'Suffixs',
        'startRegistrationDate' => 'StartRegistrationDate',
        'endRegistrationDate'   => 'EndRegistrationDate',
        'scrollId'              => 'ScrollId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endExpirationDate) {
            $res['EndExpirationDate'] = $this->endExpirationDate;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->startExpirationDate) {
            $res['StartExpirationDate'] = $this->startExpirationDate;
        }
        if (null !== $this->productDomainType) {
            $res['ProductDomainType'] = $this->productDomainType;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->domainGroupId) {
            $res['DomainGroupId'] = $this->domainGroupId;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->endLength) {
            $res['EndLength'] = $this->endLength;
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
        if (null !== $this->startLength) {
            $res['StartLength'] = $this->startLength;
        }
        if (null !== $this->tradeType) {
            $res['TradeType'] = $this->tradeType;
        }
        if (null !== $this->suffixs) {
            $res['Suffixs'] = $this->suffixs;
        }
        if (null !== $this->startRegistrationDate) {
            $res['StartRegistrationDate'] = $this->startRegistrationDate;
        }
        if (null !== $this->endRegistrationDate) {
            $res['EndRegistrationDate'] = $this->endRegistrationDate;
        }
        if (null !== $this->scrollId) {
            $res['ScrollId'] = $this->scrollId;
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
        if (isset($map['EndExpirationDate'])) {
            $model->endExpirationDate = $map['EndExpirationDate'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StartExpirationDate'])) {
            $model->startExpirationDate = $map['StartExpirationDate'];
        }
        if (isset($map['ProductDomainType'])) {
            $model->productDomainType = $map['ProductDomainType'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['DomainGroupId'])) {
            $model->domainGroupId = $map['DomainGroupId'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['EndLength'])) {
            $model->endLength = $map['EndLength'];
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
        if (isset($map['StartLength'])) {
            $model->startLength = $map['StartLength'];
        }
        if (isset($map['TradeType'])) {
            $model->tradeType = $map['TradeType'];
        }
        if (isset($map['Suffixs'])) {
            $model->suffixs = $map['Suffixs'];
        }
        if (isset($map['StartRegistrationDate'])) {
            $model->startRegistrationDate = $map['StartRegistrationDate'];
        }
        if (isset($map['EndRegistrationDate'])) {
            $model->endRegistrationDate = $map['EndRegistrationDate'];
        }
        if (isset($map['ScrollId'])) {
            $model->scrollId = $map['ScrollId'];
        }

        return $model;
    }
}
