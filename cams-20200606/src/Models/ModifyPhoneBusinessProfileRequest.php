<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ModifyPhoneBusinessProfileRequest extends Model
{
    /**
     * @description The business information.
     *
     * @example business profile
     *
     * @var string
     */
    public $about;

    /**
     * @description The address.
     *
     * @example The phone number.
     *
     * @var string
     */
    public $address;

    /**
     * @description The space ID of the RAM user within the independent software vendor (ISV) account.
     *
     * This parameter is required.
     *
     * @example 293483938849****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The description of the phone number.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The email address.
     *
     * @example aa@aliyun.com
     *
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The mobile phone number.
     *
     * This parameter is required.
     *
     * @example 8613800001234
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The URL of the profile picture.
     *
     * @example http://a.img
     *
     * @var string
     */
    public $profilePictureUrl;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The industry.
     *
     * >  Valid values: OTHER, AUTO, BEAUTY, APPAREL, EDU, ENTERTAIN, EVENT_PLAN, FINANCE, GROCERY, GOVT, HOTEL, HEALTH, NONPROFIT, PROF_SERVICES, RETAIL, TRAVEL, and RESTAURANT.
     *
     * @example OTHER
     *
     * @var string
     */
    public $vertical;

    /**
     * @description The URLs of the websites.
     *
     * @var string[]
     */
    public $websites;
    protected $_name = [
        'about' => 'About',
        'address' => 'Address',
        'custSpaceId' => 'CustSpaceId',
        'description' => 'Description',
        'email' => 'Email',
        'ownerId' => 'OwnerId',
        'phoneNumber' => 'PhoneNumber',
        'profilePictureUrl' => 'ProfilePictureUrl',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'vertical' => 'Vertical',
        'websites' => 'Websites',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->about) {
            $res['About'] = $this->about;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->profilePictureUrl) {
            $res['ProfilePictureUrl'] = $this->profilePictureUrl;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->vertical) {
            $res['Vertical'] = $this->vertical;
        }
        if (null !== $this->websites) {
            $res['Websites'] = $this->websites;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPhoneBusinessProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['About'])) {
            $model->about = $map['About'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ProfilePictureUrl'])) {
            $model->profilePictureUrl = $map['ProfilePictureUrl'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Vertical'])) {
            $model->vertical = $map['Vertical'];
        }
        if (isset($map['Websites'])) {
            if (!empty($map['Websites'])) {
                $model->websites = $map['Websites'];
            }
        }

        return $model;
    }
}
