<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ModifyPhoneBusinessProfileShrinkRequest extends Model
{
    /**
     * @example business profile
     *
     * @var string
     */
    public $about;

    /**
     * @description The space ID of the user under the independent software vendor (ISV) account.
     *
     * @example The phone number.
     *
     * @var string
     */
    public $address;

    /**
     * @description Modifies the business information of the account to which a specified phone number is bound.
     *
     * This parameter is required.
     * @example 293483938849****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The address.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The description.
     *
     * @example aa@aliyun.com
     *
     * @var string
     */
    public $email;

    /**
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * This parameter is required.
     * @example 8613800001234
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The industry.
     *
     * > Enum: {OTHER, AUTO, BEAUTY, APPAREL, EDU, ENTERTAIN, EVENT_PLAN, FINANCE, GROCERY, GOVT, HOTEL, HEALTH, NONPROFIT, PROF_SERVICES, RETAIL, TRAVEL, RESTAURANT}
     * @example http://a.img
     *
     * @var string
     */
    public $profilePictureUrl;

    /**
     * @description Sichuan
     *
     * @example OTHER
     *
     * @var string
     */
    public $vertical;

    /**
     * @description The email address.
     *
     * @var string
     */
    public $websitesShrink;
    protected $_name = [
        'about'             => 'About',
        'address'           => 'Address',
        'custSpaceId'       => 'CustSpaceId',
        'description'       => 'Description',
        'email'             => 'Email',
        'phoneNumber'       => 'PhoneNumber',
        'profilePictureUrl' => 'ProfilePictureUrl',
        'vertical'          => 'Vertical',
        'websitesShrink'    => 'Websites',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->profilePictureUrl) {
            $res['ProfilePictureUrl'] = $this->profilePictureUrl;
        }
        if (null !== $this->vertical) {
            $res['Vertical'] = $this->vertical;
        }
        if (null !== $this->websitesShrink) {
            $res['Websites'] = $this->websitesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPhoneBusinessProfileShrinkRequest
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
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ProfilePictureUrl'])) {
            $model->profilePictureUrl = $map['ProfilePictureUrl'];
        }
        if (isset($map['Vertical'])) {
            $model->vertical = $map['Vertical'];
        }
        if (isset($map['Websites'])) {
            $model->websitesShrink = $map['Websites'];
        }

        return $model;
    }
}
