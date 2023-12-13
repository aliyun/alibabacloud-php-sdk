<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class imageRegistryCredential extends Model
{
    /**
     * @description The password that is used to access the image repository.
     *
     * @example yourpassword
     *
     * @var string
     */
    public $password;

    /**
     * @description The address of the image repository. This address does not contain `http://` or `https://`.
     *
     * @example registry.cn-shanghai.aliyuncs.com/ecitest/nginx:alpine
     *
     * @var string
     */
    public $server;

    /**
     * @description The username that is used to access the image repository.
     *
     * @example yourname
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
