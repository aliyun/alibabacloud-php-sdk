<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryExportDomainExpireSnatchsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $auctionEndTime;

    /**
     * @var int
     */
    public $auctionRemainingSeconds;

    /**
     * @var int
     */
    public $baiduAntiLink;

    /**
     * @var int
     */
    public $baiduExLink;

    /**
     * @var int
     */
    public $baiduIndex;

    /**
     * @var int
     */
    public $baiduWeight;

    /**
     * @var string
     */
    public $bookEndTime;

    /**
     * @var int
     */
    public $bookRemainingSeconds;

    /**
     * @var int
     */
    public $bookedNum;

    /**
     * @var string
     */
    public $bookedPartners;

    /**
     * @var string
     */
    public $constitute;

    /**
     * @var string
     */
    public $currencyType;

    /**
     * @var string
     */
    public $deliveryTime;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var int
     */
    public $domainLen;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var float
     */
    public $freezeAmount;

    /**
     * @var string
     */
    public $icpNumber;

    /**
     * @var bool
     */
    public $icpStatus;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @var bool
     */
    public $isPremium;

    /**
     * @var string
     */
    public $partnerTypes;

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $regDate;

    /**
     * @var string
     */
    public $registrar;

    /**
     * @var float
     */
    public $renewPrice;

    /**
     * @var bool
     */
    public $reserved;

    /**
     * @var float
     */
    public $rmbPrice;

    /**
     * @var int
     */
    public $s360Weight;

    /**
     * @var string
     */
    public $seoAttributes;

    /**
     * @var string
     */
    public $shortName;

    /**
     * @var string
     */
    public $snatchNo;

    /**
     * @var string
     */
    public $snatchTypeDesc;

    /**
     * @var int
     */
    public $sougouAntiLink;

    /**
     * @var int
     */
    public $sougouIndex;

    /**
     * @var int
     */
    public $sougouWeight;

    /**
     * @var string
     */
    public $suffix;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'auctionEndTime' => 'AuctionEndTime',
        'auctionRemainingSeconds' => 'AuctionRemainingSeconds',
        'baiduAntiLink' => 'BaiduAntiLink',
        'baiduExLink' => 'BaiduExLink',
        'baiduIndex' => 'BaiduIndex',
        'baiduWeight' => 'BaiduWeight',
        'bookEndTime' => 'BookEndTime',
        'bookRemainingSeconds' => 'BookRemainingSeconds',
        'bookedNum' => 'BookedNum',
        'bookedPartners' => 'BookedPartners',
        'constitute' => 'Constitute',
        'currencyType' => 'CurrencyType',
        'deliveryTime' => 'DeliveryTime',
        'domainId' => 'DomainId',
        'domainLen' => 'DomainLen',
        'domainName' => 'DomainName',
        'domainType' => 'DomainType',
        'endDate' => 'EndDate',
        'expireDate' => 'ExpireDate',
        'extend' => 'Extend',
        'freezeAmount' => 'FreezeAmount',
        'icpNumber' => 'IcpNumber',
        'icpStatus' => 'IcpStatus',
        'introduction' => 'Introduction',
        'isPremium' => 'IsPremium',
        'partnerTypes' => 'PartnerTypes',
        'price' => 'Price',
        'productId' => 'ProductId',
        'publishTime' => 'PublishTime',
        'regDate' => 'RegDate',
        'registrar' => 'Registrar',
        'renewPrice' => 'RenewPrice',
        'reserved' => 'Reserved',
        'rmbPrice' => 'RmbPrice',
        's360Weight' => 'S360Weight',
        'seoAttributes' => 'SeoAttributes',
        'shortName' => 'ShortName',
        'snatchNo' => 'SnatchNo',
        'snatchTypeDesc' => 'SnatchTypeDesc',
        'sougouAntiLink' => 'SougouAntiLink',
        'sougouIndex' => 'SougouIndex',
        'sougouWeight' => 'SougouWeight',
        'suffix' => 'Suffix',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auctionEndTime) {
            $res['AuctionEndTime'] = $this->auctionEndTime;
        }

        if (null !== $this->auctionRemainingSeconds) {
            $res['AuctionRemainingSeconds'] = $this->auctionRemainingSeconds;
        }

        if (null !== $this->baiduAntiLink) {
            $res['BaiduAntiLink'] = $this->baiduAntiLink;
        }

        if (null !== $this->baiduExLink) {
            $res['BaiduExLink'] = $this->baiduExLink;
        }

        if (null !== $this->baiduIndex) {
            $res['BaiduIndex'] = $this->baiduIndex;
        }

        if (null !== $this->baiduWeight) {
            $res['BaiduWeight'] = $this->baiduWeight;
        }

        if (null !== $this->bookEndTime) {
            $res['BookEndTime'] = $this->bookEndTime;
        }

        if (null !== $this->bookRemainingSeconds) {
            $res['BookRemainingSeconds'] = $this->bookRemainingSeconds;
        }

        if (null !== $this->bookedNum) {
            $res['BookedNum'] = $this->bookedNum;
        }

        if (null !== $this->bookedPartners) {
            $res['BookedPartners'] = $this->bookedPartners;
        }

        if (null !== $this->constitute) {
            $res['Constitute'] = $this->constitute;
        }

        if (null !== $this->currencyType) {
            $res['CurrencyType'] = $this->currencyType;
        }

        if (null !== $this->deliveryTime) {
            $res['DeliveryTime'] = $this->deliveryTime;
        }

        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }

        if (null !== $this->domainLen) {
            $res['DomainLen'] = $this->domainLen;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->freezeAmount) {
            $res['FreezeAmount'] = $this->freezeAmount;
        }

        if (null !== $this->icpNumber) {
            $res['IcpNumber'] = $this->icpNumber;
        }

        if (null !== $this->icpStatus) {
            $res['IcpStatus'] = $this->icpStatus;
        }

        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }

        if (null !== $this->isPremium) {
            $res['IsPremium'] = $this->isPremium;
        }

        if (null !== $this->partnerTypes) {
            $res['PartnerTypes'] = $this->partnerTypes;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        if (null !== $this->regDate) {
            $res['RegDate'] = $this->regDate;
        }

        if (null !== $this->registrar) {
            $res['Registrar'] = $this->registrar;
        }

        if (null !== $this->renewPrice) {
            $res['RenewPrice'] = $this->renewPrice;
        }

        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }

        if (null !== $this->rmbPrice) {
            $res['RmbPrice'] = $this->rmbPrice;
        }

        if (null !== $this->s360Weight) {
            $res['S360Weight'] = $this->s360Weight;
        }

        if (null !== $this->seoAttributes) {
            $res['SeoAttributes'] = $this->seoAttributes;
        }

        if (null !== $this->shortName) {
            $res['ShortName'] = $this->shortName;
        }

        if (null !== $this->snatchNo) {
            $res['SnatchNo'] = $this->snatchNo;
        }

        if (null !== $this->snatchTypeDesc) {
            $res['SnatchTypeDesc'] = $this->snatchTypeDesc;
        }

        if (null !== $this->sougouAntiLink) {
            $res['SougouAntiLink'] = $this->sougouAntiLink;
        }

        if (null !== $this->sougouIndex) {
            $res['SougouIndex'] = $this->sougouIndex;
        }

        if (null !== $this->sougouWeight) {
            $res['SougouWeight'] = $this->sougouWeight;
        }

        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['AuctionEndTime'])) {
            $model->auctionEndTime = $map['AuctionEndTime'];
        }

        if (isset($map['AuctionRemainingSeconds'])) {
            $model->auctionRemainingSeconds = $map['AuctionRemainingSeconds'];
        }

        if (isset($map['BaiduAntiLink'])) {
            $model->baiduAntiLink = $map['BaiduAntiLink'];
        }

        if (isset($map['BaiduExLink'])) {
            $model->baiduExLink = $map['BaiduExLink'];
        }

        if (isset($map['BaiduIndex'])) {
            $model->baiduIndex = $map['BaiduIndex'];
        }

        if (isset($map['BaiduWeight'])) {
            $model->baiduWeight = $map['BaiduWeight'];
        }

        if (isset($map['BookEndTime'])) {
            $model->bookEndTime = $map['BookEndTime'];
        }

        if (isset($map['BookRemainingSeconds'])) {
            $model->bookRemainingSeconds = $map['BookRemainingSeconds'];
        }

        if (isset($map['BookedNum'])) {
            $model->bookedNum = $map['BookedNum'];
        }

        if (isset($map['BookedPartners'])) {
            $model->bookedPartners = $map['BookedPartners'];
        }

        if (isset($map['Constitute'])) {
            $model->constitute = $map['Constitute'];
        }

        if (isset($map['CurrencyType'])) {
            $model->currencyType = $map['CurrencyType'];
        }

        if (isset($map['DeliveryTime'])) {
            $model->deliveryTime = $map['DeliveryTime'];
        }

        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }

        if (isset($map['DomainLen'])) {
            $model->domainLen = $map['DomainLen'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['FreezeAmount'])) {
            $model->freezeAmount = $map['FreezeAmount'];
        }

        if (isset($map['IcpNumber'])) {
            $model->icpNumber = $map['IcpNumber'];
        }

        if (isset($map['IcpStatus'])) {
            $model->icpStatus = $map['IcpStatus'];
        }

        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }

        if (isset($map['IsPremium'])) {
            $model->isPremium = $map['IsPremium'];
        }

        if (isset($map['PartnerTypes'])) {
            $model->partnerTypes = $map['PartnerTypes'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        if (isset($map['RegDate'])) {
            $model->regDate = $map['RegDate'];
        }

        if (isset($map['Registrar'])) {
            $model->registrar = $map['Registrar'];
        }

        if (isset($map['RenewPrice'])) {
            $model->renewPrice = $map['RenewPrice'];
        }

        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }

        if (isset($map['RmbPrice'])) {
            $model->rmbPrice = $map['RmbPrice'];
        }

        if (isset($map['S360Weight'])) {
            $model->s360Weight = $map['S360Weight'];
        }

        if (isset($map['SeoAttributes'])) {
            $model->seoAttributes = $map['SeoAttributes'];
        }

        if (isset($map['ShortName'])) {
            $model->shortName = $map['ShortName'];
        }

        if (isset($map['SnatchNo'])) {
            $model->snatchNo = $map['SnatchNo'];
        }

        if (isset($map['SnatchTypeDesc'])) {
            $model->snatchTypeDesc = $map['SnatchTypeDesc'];
        }

        if (isset($map['SougouAntiLink'])) {
            $model->sougouAntiLink = $map['SougouAntiLink'];
        }

        if (isset($map['SougouIndex'])) {
            $model->sougouIndex = $map['SougouIndex'];
        }

        if (isset($map['SougouWeight'])) {
            $model->sougouWeight = $map['SougouWeight'];
        }

        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
