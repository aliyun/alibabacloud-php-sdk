<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class Principal extends Model
{
    /**
     * @example acs:ram::[AliyunAccountId]:user/username_abc
     *
     * @var string
     */
    public $principalArn;
    protected $_name = [
        'principalArn' => 'PrincipalArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->principalArn) {
            $res['PrincipalArn'] = $this->principalArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Principal
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrincipalArn'])) {
            $model->principalArn = $map['PrincipalArn'];
        }

        return $model;
    }
}
