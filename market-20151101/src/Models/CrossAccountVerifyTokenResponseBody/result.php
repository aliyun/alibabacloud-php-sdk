<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\CrossAccountVerifyTokenResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $authRoles;

    /**
     * @var int
     */
    public $authTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'authRoles' => 'AuthRoles',
        'authTime' => 'AuthTime',
        'name' => 'Name',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (\is_array($this->authRoles)) {
            Model::validateArray($this->authRoles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authRoles) {
            if (\is_array($this->authRoles)) {
                $res['AuthRoles'] = [];
                $n1 = 0;
                foreach ($this->authRoles as $item1) {
                    $res['AuthRoles'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthRoles'])) {
            if (!empty($map['AuthRoles'])) {
                $model->authRoles = [];
                $n1 = 0;
                foreach ($map['AuthRoles'] as $item1) {
                    $model->authRoles[$n1] = $item1;
                    ++$n1;
                }
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
