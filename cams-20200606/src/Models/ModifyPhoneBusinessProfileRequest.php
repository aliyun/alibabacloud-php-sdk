<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ModifyPhoneBusinessProfileRequest extends Model
{
    /**
     * @description The address.
     *
     * @example Sichuan
     *
     * @var string
     */
    public $address;

    /**
     * @description The space ID of the user under the independent software vendor (ISV) account.
     *
     * @example 293483938849****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The description.
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
     * @description The phone number.
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
     * @description The industry.
     *
     * @example Retail
     *
     * @var string
     */
    public $vertical;

    /**
     * @description The websites.
     *
     * @var string[]
     */
    public $websites;
    protected $_name = [
        'address'           => 'Address',
        'custSpaceId'       => 'CustSpaceId',
        'description'       => 'Description',
        'email'             => 'Email',
        'phoneNumber'       => 'PhoneNumber',
        'profilePictureUrl' => 'ProfilePictureUrl',
        'vertical'          => 'Vertical',
        'websites'          => 'Websites',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
            if (!empty($map['Websites'])) {
                $model->websites = $map['Websites'];
            }
        }

        return $model;
    }
}
