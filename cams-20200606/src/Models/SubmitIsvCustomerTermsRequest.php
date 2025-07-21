<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class SubmitIsvCustomerTermsRequest extends Model
{
    /**
     * @description The business scenario.
     *
     * This parameter is required.
     *
     * @example Marketing products
     *
     * @var string
     */
    public $businessDesc;

    /**
     * @description The enterprise mail.
     *
     * This parameter is required.
     *
     * @example partner@aliyun.com
     *
     * @var string
     */
    public $contactMail;

    /**
     * @description The country code.
     *
     * >  For more information about country codes, see [Country codes](https://help.aliyun.com/document_detail/608210.html).
     *
     * This parameter is required.
     *
     * @example CN
     *
     * @var string
     */
    public $countryId;

    /**
     * @description The enterprise name.
     *
     * This parameter is required.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $custName;

    /**
     * @description The space ID of the user within the independent software vendor (ISV) account.
     *
     * This parameter is required.
     *
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The ISV or Client agreement.
     *
     * This parameter is required.
     *
     * @example isvTerms.pdf
     *
     * @var string
     */
    public $isvTerms;

    /**
     * @description The enterprise address.
     *
     * This parameter is required.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $officeAddress;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'businessDesc' => 'BusinessDesc',
        'contactMail' => 'ContactMail',
        'countryId' => 'CountryId',
        'custName' => 'CustName',
        'custSpaceId' => 'CustSpaceId',
        'isvTerms' => 'IsvTerms',
        'officeAddress' => 'OfficeAddress',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessDesc) {
            $res['BusinessDesc'] = $this->businessDesc;
        }
        if (null !== $this->contactMail) {
            $res['ContactMail'] = $this->contactMail;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->custName) {
            $res['CustName'] = $this->custName;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->isvTerms) {
            $res['IsvTerms'] = $this->isvTerms;
        }
        if (null !== $this->officeAddress) {
            $res['OfficeAddress'] = $this->officeAddress;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitIsvCustomerTermsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessDesc'])) {
            $model->businessDesc = $map['BusinessDesc'];
        }
        if (isset($map['ContactMail'])) {
            $model->contactMail = $map['ContactMail'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['CustName'])) {
            $model->custName = $map['CustName'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['IsvTerms'])) {
            $model->isvTerms = $map['IsvTerms'];
        }
        if (isset($map['OfficeAddress'])) {
            $model->officeAddress = $map['OfficeAddress'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
