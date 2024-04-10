<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\QueryPhoneBusinessProfileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $about;

    /**
     * @description The address.
     *
     * @example Changsha
     *
     * @var string
     */
    public $address;

    /**
     * @description The description.
     *
     * @example Description
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
     * @description The URL of the profile picture.
     *
     * @example https://....img
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
        'about'             => 'About',
        'address'           => 'Address',
        'description'       => 'Description',
        'email'             => 'Email',
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
        if (null !== $this->about) {
            $res['About'] = $this->about;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
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
     * @return data
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
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
