<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class AddUserRequest extends Model
{
    /**
     * @example 123XXXXXXXX。
     *
     * @var int
     */
    public $addedUserId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'addedUserId' => 'AddedUserId',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addedUserId) {
            $res['AddedUserId'] = $this->addedUserId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddedUserId'])) {
            $model->addedUserId = $map['AddedUserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
