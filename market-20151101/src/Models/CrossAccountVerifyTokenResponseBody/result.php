<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\CrossAccountVerifyTokenResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $authRoles;

    /**
     * @example 1676974108866
     *
     * @var int
     */
    public $authTime;

    /**
     * @example marketplace_wangxiao_test
     *
     * @var string
     */
    public $name;

    /**
     * @example 1744526877246715
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'authRoles' => 'AuthRoles',
        'authTime'  => 'AuthTime',
        'name'      => 'Name',
        'uid'       => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authRoles) {
            $res['AuthRoles'] = $this->authRoles;
        }
        if (null !== $this->authTime) {
            $res['AuthTime'] = $this->authTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthRoles'])) {
            if (!empty($map['AuthRoles'])) {
                $model->authRoles = $map['AuthRoles'];
            }
        }
        if (isset($map['AuthTime'])) {
            $model->authTime = $map['AuthTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
