<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetSystemRequest;

use AlibabaCloud\Tea\Model;

class loginCredentials extends Model
{
    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'keyPairName' => 'KeyPairName',
        'password' => 'Password',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loginCredentials
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
