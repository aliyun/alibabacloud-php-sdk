<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Tea\Model;

class RegisterAccountRequest extends Model
{
    /**
     * @example "user api register"
     *
     * @var string
     */
    public $memo;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'memo'     => 'Memo',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
