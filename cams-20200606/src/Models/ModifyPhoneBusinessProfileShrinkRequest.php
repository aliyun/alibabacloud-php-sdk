<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ModifyPhoneBusinessProfileShrinkRequest extends Model
{
    /**
     * @example 地址
     *
     * @var string
     */
    public $address;

    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example 描述
     *
     * @var string
     */
    public $description;

    /**
     * @example aa@aliyun.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 手机号码
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example http://a.img
     *
     * @var string
     */
    public $profilePictureUrl;

    /**
     * @example 零售
     *
     * @var string
     */
    public $vertical;

    /**
     * @var string
     */
    public $websitesShrink;
    protected $_name = [
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
