<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUserByDeviceIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUserByDeviceIdResponseBody\result\userUnionIds;

class result extends Model
{
    /**
     * @var string
     */
    public $userOpenId;

    /**
     * @var userUnionIds[]
     */
    public $userUnionIds;
    protected $_name = [
        'userOpenId' => 'UserOpenId',
        'userUnionIds' => 'UserUnionIds',
    ];

    public function validate()
    {
        if (\is_array($this->userUnionIds)) {
            Model::validateArray($this->userUnionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userOpenId) {
            $res['UserOpenId'] = $this->userOpenId;
        }

        if (null !== $this->userUnionIds) {
            if (\is_array($this->userUnionIds)) {
                $res['UserUnionIds'] = [];
                $n1 = 0;
                foreach ($this->userUnionIds as $item1) {
                    $res['UserUnionIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['UserOpenId'])) {
            $model->userOpenId = $map['UserOpenId'];
        }

        if (isset($map['UserUnionIds'])) {
            if (!empty($map['UserUnionIds'])) {
                $model->userUnionIds = [];
                $n1 = 0;
                foreach ($map['UserUnionIds'] as $item1) {
                    $model->userUnionIds[$n1] = userUnionIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
