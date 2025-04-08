<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class GrantRoleToUsersRequest extends Model
{
    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string[]
     */
    public $userArns;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'roleArn' => 'roleArn',
        'userArns' => 'userArns',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->userArns)) {
            Model::validateArray($this->userArns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }

        if (null !== $this->userArns) {
            if (\is_array($this->userArns)) {
                $res['userArns'] = [];
                $n1 = 0;
                foreach ($this->userArns as $item1) {
                    $res['userArns'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }

        if (isset($map['userArns'])) {
            if (!empty($map['userArns'])) {
                $model->userArns = [];
                $n1 = 0;
                foreach ($map['userArns'] as $item1) {
                    $model->userArns[$n1++] = $item1;
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
