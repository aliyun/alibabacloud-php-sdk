<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class DeleteUserDevicesRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceTags;
    protected $_name = [
        'deviceTags' => 'DeviceTags',
    ];

    public function validate()
    {
        if (\is_array($this->deviceTags)) {
            Model::validateArray($this->deviceTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceTags) {
            if (\is_array($this->deviceTags)) {
                $res['DeviceTags'] = [];
                $n1 = 0;
                foreach ($this->deviceTags as $item1) {
                    $res['DeviceTags'][$n1] = $item1;
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
        if (isset($map['DeviceTags'])) {
            if (!empty($map['DeviceTags'])) {
                $model->deviceTags = [];
                $n1 = 0;
                foreach ($map['DeviceTags'] as $item1) {
                    $model->deviceTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
