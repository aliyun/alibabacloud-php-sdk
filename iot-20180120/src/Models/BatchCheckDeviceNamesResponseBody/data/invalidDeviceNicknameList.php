<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponseBody\data;

use AlibabaCloud\Dara\Model;

class invalidDeviceNicknameList extends Model
{
    /**
     * @var string[]
     */
    public $invalidDeviceNickname;
    protected $_name = [
        'invalidDeviceNickname' => 'InvalidDeviceNickname',
    ];

    public function validate()
    {
        if (\is_array($this->invalidDeviceNickname)) {
            Model::validateArray($this->invalidDeviceNickname);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidDeviceNickname) {
            if (\is_array($this->invalidDeviceNickname)) {
                $res['InvalidDeviceNickname'] = [];
                $n1 = 0;
                foreach ($this->invalidDeviceNickname as $item1) {
                    $res['InvalidDeviceNickname'][$n1] = $item1;
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
        if (isset($map['InvalidDeviceNickname'])) {
            if (!empty($map['InvalidDeviceNickname'])) {
                $model->invalidDeviceNickname = [];
                $n1 = 0;
                foreach ($map['InvalidDeviceNickname'] as $item1) {
                    $model->invalidDeviceNickname[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
