<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUserByDeviceIdResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUserByDeviceIdResponseBody\result\userUnionIds;
use AlibabaCloud\Tea\Model;

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
        'userOpenId'   => 'UserOpenId',
        'userUnionIds' => 'UserUnionIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userOpenId) {
            $res['UserOpenId'] = $this->userOpenId;
        }
        if (null !== $this->userUnionIds) {
            $res['UserUnionIds'] = [];
            if (null !== $this->userUnionIds && \is_array($this->userUnionIds)) {
                $n = 0;
                foreach ($this->userUnionIds as $item) {
                    $res['UserUnionIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['UserOpenId'])) {
            $model->userOpenId = $map['UserOpenId'];
        }
        if (isset($map['UserUnionIds'])) {
            if (!empty($map['UserUnionIds'])) {
                $model->userUnionIds = [];
                $n                   = 0;
                foreach ($map['UserUnionIds'] as $item) {
                    $model->userUnionIds[$n++] = null !== $item ? userUnionIds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
