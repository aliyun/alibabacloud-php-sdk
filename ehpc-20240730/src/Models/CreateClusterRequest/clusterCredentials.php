<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class clusterCredentials extends Model
{
    /**
     * @example ali0824
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @example **********
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'keyPairName' => 'KeyPairName',
        'password'    => 'Password',
    ];

    public function validate()
    {
    }

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
     * @return clusterCredentials
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
