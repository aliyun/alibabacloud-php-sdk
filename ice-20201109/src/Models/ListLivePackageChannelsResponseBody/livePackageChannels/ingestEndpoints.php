<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageChannelsResponseBody\livePackageChannels;

use AlibabaCloud\Tea\Model;

class ingestEndpoints extends Model
{
    /**
     * @description The ingest endpoint ID.
     *
     * @example ingest1
     *
     * @var string
     */
    public $id;

    /**
     * @description The password.
     *
     * @example 2F9e9******18b569c8
     *
     * @var string
     */
    public $password;

    /**
     * @description The ingest endpoint URL.
     *
     * @example http://xxx-1.packagepush-abcxxx.ap-southeast-1.aliyuncsiceintl.com/v1/group01/1/ch01/manifest
     *
     * @var string
     */
    public $url;

    /**
     * @description The username.
     *
     * @example us12******das
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'id'       => 'Id',
        'password' => 'Password',
        'url'      => 'Url',
        'username' => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingestEndpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
