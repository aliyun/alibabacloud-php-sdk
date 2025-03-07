<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageChannelCredentialsResponseBody;

use AlibabaCloud\Tea\Model;

class ingestEndpoints extends Model
{
    /**
     * @description The ingest endpoint ID. `input1` indicates primary and `input2` indicates secondary.
     *
     * @example input1
     *
     * @var string
     */
    public $id;

    /**
     * @description The password.
     *
     * @example examplePassword123
     *
     * @var string
     */
    public $password;

    /**
     * @description The ingest endpoint URL.
     *
     * @example rtmp://example.com/live/input1
     *
     * @var string
     */
    public $url;

    /**
     * @description The username.
     *
     * @example user1
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
