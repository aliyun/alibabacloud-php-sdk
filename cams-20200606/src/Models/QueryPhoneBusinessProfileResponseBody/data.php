<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\QueryPhoneBusinessProfileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 长沙
     *
     * @var string
     */
    public $address;

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
     * @example https://....img
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
     * @var string[]
     */
    public $websites;
    protected $_name = [
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
