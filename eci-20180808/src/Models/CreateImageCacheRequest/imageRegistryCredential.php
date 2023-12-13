<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest;

use AlibabaCloud\Tea\Model;

class imageRegistryCredential extends Model
{
    /**
     * @description The password that is used to log on to image repository N.
     *
     * @example password
     *
     * @var string
     */
    public $password;

    /**
     * @description The address of the image repository without the `http://` or `https://` prefix.
     *
     * @example registry-vpc.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $server;

    /**
     * @description The username that is used to log on to image repository N.
     *
     * @example username
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'password' => 'Password',
        'server'   => 'Server',
        'userName' => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageRegistryCredential
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
