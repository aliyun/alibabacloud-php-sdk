<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponse\data;

use AlibabaCloud\Tea\Model;

class invalidDeviceNicknameList extends Model
{
    /**
     * @description InvalidDeviceNickname
     *
     * @var string[]
     */
    public $invalidDeviceNickname;
    protected $_name = [
        'invalidDeviceNickname' => 'InvalidDeviceNickname',
    ];

    public function validate()
    {
        Model::validateRequired('invalidDeviceNickname', $this->invalidDeviceNickname, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDeviceNickname) {
            $res['InvalidDeviceNickname'] = $this->invalidDeviceNickname;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidDeviceNicknameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvalidDeviceNickname'])) {
            if (!empty($map['InvalidDeviceNickname'])) {
                $model->invalidDeviceNickname = $map['InvalidDeviceNickname'];
            }
        }

        return $model;
    }
}
