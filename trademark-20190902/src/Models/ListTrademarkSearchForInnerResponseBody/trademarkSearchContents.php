<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkSearchForInnerResponseBody;

use AlibabaCloud\Tea\Model;

class trademarkSearchContents extends Model
{
    /**
     * @var string
     */
    public $applyDate;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var string
     */
    public $exclusiveDateLimit;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $lastProcedureStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameCharSection;

    /**
     * @var string
     */
    public $nameOrigin;

    /**
     * @var string
     */
    public $nameSimplifiedChinese;

    /**
     * @var string
     */
    public $nameSort;

    /**
     * @var string
     */
    public $onSale;

    /**
     * @var string
     */
    public $ownerAddress;

    /**
     * @var string
     */
    public $ownerEnAddress;

    /**
     * @var string
     */
    public $ownerEnName;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $preAnnDate;

    /**
     * @var string
     */
    public $preAnnNum;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string[]
     */
    public $productDel;

    /**
     * @var string
     */
    public $productDescription;

    /**
     * @var string
     */
    public $regAnnNum;

    /**
     * @var string
     */
    public $registrationNumber;

    /**
     * @var string
     */
    public $share;

    /**
     * @var string[]
     */
    public $similarGroupDel;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $wellKnow;
    protected $_name = [
        'applyDate'             => 'ApplyDate',
        'classification'        => 'Classification',
        'exclusiveDateLimit'    => 'ExclusiveDateLimit',
        'id'                    => 'Id',
        'image'                 => 'Image',
        'lastProcedureStatus'   => 'LastProcedureStatus',
        'name'                  => 'Name',
        'nameCharSection'       => 'NameCharSection',
        'nameOrigin'            => 'NameOrigin',
        'nameSimplifiedChinese' => 'NameSimplifiedChinese',
        'nameSort'              => 'NameSort',
        'onSale'                => 'OnSale',
        'ownerAddress'          => 'OwnerAddress',
        'ownerEnAddress'        => 'OwnerEnAddress',
        'ownerEnName'           => 'OwnerEnName',
        'ownerName'             => 'OwnerName',
        'preAnnDate'            => 'PreAnnDate',
        'preAnnNum'             => 'PreAnnNum',
        'product'               => 'Product',
        'productDel'            => 'ProductDel',
        'productDescription'    => 'ProductDescription',
        'regAnnNum'             => 'RegAnnNum',
        'registrationNumber'    => 'RegistrationNumber',
        'share'                 => 'Share',
        'similarGroupDel'       => 'SimilarGroupDel',
        'uid'                   => 'Uid',
        'wellKnow'              => 'WellKnow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyDate) {
            $res['ApplyDate'] = $this->applyDate;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->exclusiveDateLimit) {
            $res['ExclusiveDateLimit'] = $this->exclusiveDateLimit;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->lastProcedureStatus) {
            $res['LastProcedureStatus'] = $this->lastProcedureStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameCharSection) {
            $res['NameCharSection'] = $this->nameCharSection;
        }
        if (null !== $this->nameOrigin) {
            $res['NameOrigin'] = $this->nameOrigin;
        }
        if (null !== $this->nameSimplifiedChinese) {
            $res['NameSimplifiedChinese'] = $this->nameSimplifiedChinese;
        }
        if (null !== $this->nameSort) {
            $res['NameSort'] = $this->nameSort;
        }
        if (null !== $this->onSale) {
            $res['OnSale'] = $this->onSale;
        }
        if (null !== $this->ownerAddress) {
            $res['OwnerAddress'] = $this->ownerAddress;
        }
        if (null !== $this->ownerEnAddress) {
            $res['OwnerEnAddress'] = $this->ownerEnAddress;
        }
        if (null !== $this->ownerEnName) {
            $res['OwnerEnName'] = $this->ownerEnName;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->preAnnDate) {
            $res['PreAnnDate'] = $this->preAnnDate;
        }
        if (null !== $this->preAnnNum) {
            $res['PreAnnNum'] = $this->preAnnNum;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->productDel) {
            $res['ProductDel'] = $this->productDel;
        }
        if (null !== $this->productDescription) {
            $res['ProductDescription'] = $this->productDescription;
        }
        if (null !== $this->regAnnNum) {
            $res['RegAnnNum'] = $this->regAnnNum;
        }
        if (null !== $this->registrationNumber) {
            $res['RegistrationNumber'] = $this->registrationNumber;
        }
        if (null !== $this->share) {
            $res['Share'] = $this->share;
        }
        if (null !== $this->similarGroupDel) {
            $res['SimilarGroupDel'] = $this->similarGroupDel;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->wellKnow) {
            $res['WellKnow'] = $this->wellKnow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trademarkSearchContents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyDate'])) {
            $model->applyDate = $map['ApplyDate'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['ExclusiveDateLimit'])) {
            $model->exclusiveDateLimit = $map['ExclusiveDateLimit'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['LastProcedureStatus'])) {
            $model->lastProcedureStatus = $map['LastProcedureStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameCharSection'])) {
            $model->nameCharSection = $map['NameCharSection'];
        }
        if (isset($map['NameOrigin'])) {
            $model->nameOrigin = $map['NameOrigin'];
        }
        if (isset($map['NameSimplifiedChinese'])) {
            $model->nameSimplifiedChinese = $map['NameSimplifiedChinese'];
        }
        if (isset($map['NameSort'])) {
            $model->nameSort = $map['NameSort'];
        }
        if (isset($map['OnSale'])) {
            $model->onSale = $map['OnSale'];
        }
        if (isset($map['OwnerAddress'])) {
            $model->ownerAddress = $map['OwnerAddress'];
        }
        if (isset($map['OwnerEnAddress'])) {
            $model->ownerEnAddress = $map['OwnerEnAddress'];
        }
        if (isset($map['OwnerEnName'])) {
            $model->ownerEnName = $map['OwnerEnName'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['PreAnnDate'])) {
            $model->preAnnDate = $map['PreAnnDate'];
        }
        if (isset($map['PreAnnNum'])) {
            $model->preAnnNum = $map['PreAnnNum'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['ProductDel'])) {
            if (!empty($map['ProductDel'])) {
                $model->productDel = $map['ProductDel'];
            }
        }
        if (isset($map['ProductDescription'])) {
            $model->productDescription = $map['ProductDescription'];
        }
        if (isset($map['RegAnnNum'])) {
            $model->regAnnNum = $map['RegAnnNum'];
        }
        if (isset($map['RegistrationNumber'])) {
            $model->registrationNumber = $map['RegistrationNumber'];
        }
        if (isset($map['Share'])) {
            $model->share = $map['Share'];
        }
        if (isset($map['SimilarGroupDel'])) {
            if (!empty($map['SimilarGroupDel'])) {
                $model->similarGroupDel = $map['SimilarGroupDel'];
            }
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['WellKnow'])) {
            $model->wellKnow = $map['WellKnow'];
        }

        return $model;
    }
}
