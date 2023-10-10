<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sApplicationBaseInfoRequest extends Model
{
    /**
     * @description The ID of the application that you want to modify.
     *
     * @example 4f038ddf-b27b-****-****-88e44375****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The description of the application. The description can be up to 256 characters in length.
     *
     * @example app for pre-production
     *
     * @var string
     */
    public $description;

    /**
     * @description The email address of the application owner.
     *
     * @example mymail@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The owner of the application. The value can be up to 128 characters in length.
     *
     * @example Tom
     *
     * @var string
     */
    public $owner;

    /**
     * @description The phone number of the application owner.
     *
     * @example 1361234xxxx
     *
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'appId'       => 'AppId',
        'description' => 'Description',
        'email'       => 'Email',
        'owner'       => 'Owner',
        'phoneNumber' => 'PhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateK8sApplicationBaseInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        return $model;
    }
}
